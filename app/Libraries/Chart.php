<?php

namespace App\Libraries;

use Modules\Localize\Models\LocalizeModel;
use Modules\Account\Models\AccountModel;
use Modules\Paymethod\Models\PaymethodModel;
use Modules\Paymethod\Models\PaymethodtotalModel;
use Modules\Ticket\Models\TicketModel;
use Modules\Agent\Models\AgentModel;
use Modules\Trip\Models\TripModel;
use Modules\Trip\Models\SubtripModel;
use phpDocumentor\Reflection\Types\Null_;

class Chart
{
    protected $localizeModel;
    protected $accountModel;
    protected $payMethodModel;
    protected $payMethodTotalModel;
    protected $ticketModel;
    protected $agentModel;
    protected $tripModel;
    protected $subtripModel;

    protected $userId;
    protected $userRole;

    public function __construct()
    {
        $this->localizeModel = new LocalizeModel();
        $this->payMethodModel = new PaymethodModel();
        $this->payMethodTotalModel = new PaymethodtotalModel();
        $this->ticketModel = new TicketModel();
        $this->agentModel = new AgentModel();
        $this->tripModel = new TripModel();
        $this->subtripModel = new SubtripModel();
        $this->accountModel = new AccountModel();

        $this->userId = session()->get('user_id');
        $this->userRole = session()->get('role_id');
    }

    public function totalTripToday()
    {
        $day = date('Y-m-d');
        $dayofweek = date('N', strtotime($day));
        $totalTrip = null;
        $maintripId = array();
        $getdata = $this->tripModel->select('trips.id')->Where('startdate >', $day)->where('status', 1)->orwhere("find_in_set($dayofweek, weekend)")->findAll();
        foreach ($getdata as $key => $value) {
            array_push($maintripId, (int) $value->id);
        }
        if ($getdata) {
            $totalTrip = $this->subtripModel->select('trip_id')->where('status', 1)->where('type', 'main')->whereNotIn('trip_id', $maintripId)->countAllResults();
        } else {
            $totalTrip = $this->subtripModel->select('trip_id')->where('type', 'main')->where('status', 1)->countAllResults();
        }
        return $totalTrip;
    }

    public function totalBooking()
    {
        $day = date('Y-m-d');

        $this->ticketModel
            ->where('journeydata', $day)
            ->where('refund', 0)
            ->where('cancel_status', 0);

        ($this->userRole != 1) && $this->ticketModel->where('bookby_user_id', $this->userId);

        return $this->ticketModel->countAllResults();
    }

    public function totalMoney()
    {
        $day = date('Y-m-d');

        $this->ticketModel
            ->selectSum('paidamount')
            ->where('journeydata', $day)
            ->where('refund', 0)
            ->where('cancel_status', 0);

        ($this->userRole != 1) && $this->ticketModel->where('bookby_user_id', $this->userId);

        $money = $this->ticketModel->first();
        $totalMoney = (int) $money->paidamount;
        return $totalMoney;
    }

    public function totalPassanger()
    {
        $day = date('Y-m-d');
        $totalbooking = $this->ticketModel->selectSum('totalseat')->where('journeydata', $day)->where('refund', 0)->where('cancel_status', 0)->first();
        $totalPassanger = (int) $totalbooking->totalseat;
        return $totalPassanger;
    }

    public function getIncome()
    {
        $incomeArray = array();
        $assendingYear = array();
        $checkYear = array();

        $this->accountModel->select('YEAR(created_at) as year')->selectSum('amount')->where('type', "income");

        if ($this->userRole != 1) {
            $this->accountModel->where('system_user_id', $this->userId);
        }

        $income = $this->accountModel->groupBy('YEAR(created_at)')->findAll();

        $assendingYear = $this->assendingYear();
        asort($assendingYear);

        foreach ($income as $ivalue) {
            array_push($checkYear, $ivalue->year);
        }

        $incoomeresult = array_diff($assendingYear, $checkYear);
        foreach ($incoomeresult as $rvalue) {
            $Input = new \stdClass;
            $Input->amount = 0;
            $Input->year = $rvalue;
            array_push($income, $Input);
        }

        asort($income);
        foreach ($income as $value) {
            array_push($incomeArray, $value->amount);
        }
        return $incomeArray;
    }

    public function getExpense()
    {
        $expenseArray = array();
        $assendingYear = array();
        $checkYear = array();

        $this->accountModel->select('Year(created_at) as year')->selectSum('amount')->where('type', "expense");

        if (session()->get('role_id') != 1) {
            $userId = session()->get('user_id');
            $this->accountModel->where('system_user_id', $userId);
        }

        $expense = $this->accountModel->groupBy('Year(created_at)')->findAll();

        $assendingYear = $this->assendingYear();
        asort($assendingYear);
        foreach ($expense as $evalue) {
            array_push($checkYear, $evalue->year);
        }

        $expenseresult = array_diff($assendingYear, $checkYear);
        foreach ($expenseresult as $rvalue) {
            $Input = new \stdClass;
            $Input->amount = 0;
            $Input->year = $rvalue;
            array_push($expense, $Input);
        }
        asort($expense);
        foreach ($expense as $value) {
            array_push($expenseArray, $value->amount);
        }
        return  $expenseArray;
    }

    public function assendingYear()
    {
        $year = $this->accountModel->select('Year(created_at) as year')->groupBy('Year(created_at)')->findAll();
        asort($year);
        $assendingYear = array();
        foreach ($year as $yvalue) {
            array_push($assendingYear, $yvalue->year);
        }
        return $assendingYear;
    }

    public function monthIncome()
    {
        $incomeArray = array();
        $assendingMonth = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"];
        $checkMonth = array();

        $this->accountModel->select('Month(created_at) as month')->selectSum('amount')->where('type', "income")->where('Year(created_at)', date('Y'));

        if (session()->get('role_id') != 1) {
            $userId = session()->get('user_id');
            $this->accountModel->where('system_user_id', $userId);
        }

        $income = $this->accountModel->groupBy('Month(created_at)')->findAll();

        foreach ($income as $evalue) {
            array_push($checkMonth, $evalue->month);
        }

        $incomeresult = array_diff($assendingMonth, $checkMonth);
        foreach ($incomeresult as $rvalue) {
            $Input = new \stdClass;
            $Input->amount = 0;
            $Input->month = $rvalue;
            array_push($income, $Input);
        }
        foreach ($income as $value) {
            $incomeArray[$value->month] =    $value->amount;
        }
        ksort($incomeArray);
        return $incomeArray;
    }

    public function monthExpense()
    {
        $expanseArray = array();
        $assendingMonth = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"];
        $checkMonth = array();

        $this->accountModel->select('Month(created_at) as month')->selectSum('amount')->where('type', "expense")->where('Year(created_at)', date('Y'));

        if (session()->get('role_id') != 1) {
            $userId = session()->get('user_id');
            $this->accountModel->where('system_user_id', $userId);
        }

        $expanse = $this->accountModel->groupBy('Month(created_at)')->findAll();

        foreach ($expanse as $evalue) {
            array_push($checkMonth, $evalue->month);
        }
        $expanseresult = array_diff($assendingMonth, $checkMonth);
        foreach ($expanseresult as $rvalue) {
            $Input = new \stdClass;
            $Input->amount = 0;
            $Input->month = $rvalue;
            array_push($expanse, $Input);
        }
        foreach ($expanse as $value) {
            $expanseArray[$value->month] =    $value->amount;
        }
        ksort($expanseArray);
        return $expanseArray;
    }

    public function weekIncome()
    {
        $incomeArray = array();
        $FirstDay = date("Y-m-d", strtotime('Monday this week'));
        $LastDay = date("Y-m-d", strtotime('Sunday this week'));
        $fromDate = date('Y-m-d', strtotime($FirstDay));
        $toDate = date('Y-m-d', strtotime($LastDay));

        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday',];
        $checkWeek = array();

        $this->accountModel->select('DAYNAME(created_at) as day')->selectSum('amount')->where('type', "income")->where('DATE(created_at) >=', $fromDate)->where('DATE(created_at) <=', $toDate);

        if (session()->get('role_id') != 1) {
            $userId = session()->get('user_id');
            $this->accountModel->where('system_user_id', $userId);
        }

        $income = $this->accountModel->groupBy('DAYNAME(created_at)')->findAll();

        foreach ($income as $evalue) {
            array_push($checkWeek, $evalue->day);
        }

        $incomeArray = array_diff($days, $checkWeek);
        foreach ($incomeArray as $rvalue) {
            $Input = new \stdClass;
            $Input->amount = 0;
            $Input->day = $rvalue;
            array_push($income, $Input);
        }
        $serialResult = array();
        foreach ($income as $key => $value) {
            if ($value->day == "Saturday") {
                $serialResult[0] = $value->amount;
            }
            if ($value->day == "Sunday") {
                $serialResult[1] = $value->amount;
            }
            if ($value->day == "Monday") {
                $serialResult[2] = $value->amount;
            }
            if ($value->day == "Tuesday") {
                $serialResult[3] = $value->amount;
            }
            if ($value->day == "Wednesday") {
                $serialResult[4] = $value->amount;
            }
            if ($value->day == "Thursday") {
                $serialResult[5] = $value->amount;
            }
            if ($value->day == "Friday") {
                $serialResult[6] = $value->amount;
            }
        }
        ksort($serialResult);
        return $serialResult;
    }
    public function weekExpense()
    {
        $expanceArray = array();
        $FirstDay = date("Y-m-d", strtotime('Monday this week'));
        $LastDay = date("Y-m-d", strtotime('Sunday this week'));
        $fromDate = date('Y-m-d', strtotime($FirstDay));
        $toDate = date('Y-m-d', strtotime($LastDay));
        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday',];
        $checkWeek = array();

        $this->accountModel->select('DAYNAME(created_at) as day')->selectSum('amount')->where('type', "expense")->where('DATE(created_at) >=', $fromDate)->where('DATE(created_at) <=', $toDate);

        if (session()->get('role_id') != 1) {
            $userId = session()->get('user_id');
            $this->accountModel->where('system_user_id', $userId);
        }

        $expense = $this->accountModel->groupBy('DAYNAME(created_at)')->findAll();

        foreach ($expense as $evalue) {
            array_push($checkWeek, $evalue->day);
        }

        $expanceArray = array_diff($days, $checkWeek);
        foreach ($expanceArray as $rvalue) {
            $Input = new \stdClass;
            $Input->amount = 0;
            $Input->day = $rvalue;
            array_push($expense, $Input);
        }

        $serialResult = array();
        foreach ($expense as $key => $value) {
            if ($value->day == "Saturday") {
                $serialResult[0] = $value->amount;
            }
            if ($value->day == "Sunday") {
                $serialResult[1] = $value->amount;
            }
            if ($value->day == "Monday") {
                $serialResult[2] = $value->amount;
            }
            if ($value->day == "Tuesday") {
                $serialResult[3] = $value->amount;
            }
            if ($value->day == "Wednesday") {
                $serialResult[4] = $value->amount;
            }
            if ($value->day == "Thursday") {
                $serialResult[5] = $value->amount;
            }
            if ($value->day == "Friday") {
                $serialResult[6] = $value->amount;
            }
        }
        ksort($serialResult);
        return $serialResult;
    }

    public function payTypeChart()
    {
        $this->payMethodModel
            ->select('MAX(paymethods.name) AS name')
            ->selectSum('paymethodtotals.amount')
            ->join('paymethodtotals', 'paymethodtotals.paymethod_id = paymethods.id', 'left');

        if (session()->get('role_id') != 1) {
            $userId = session()->get('user_id');
            $this->payMethodModel->where('paymethodtotals.user_id', $userId);
        }

        $data = $this->payMethodModel->groupBy('paymethodtotals.paymethod_id')->findAll();

        $returnData = array();
        foreach ($data as $key => $value) {
            $returnData[$value->name] = $value->amount;
        }
        return  $returnData;
    }

    public function getAgentBooking()
    {
        $returnData = $this->ticketModel
            ->select('CONCAT(MAX(agents.first_name), " ", MAX(agents.last_name)) AS name')
            ->selectSum('paidamount')
            ->join('users', 'tickets.bookby_user_id  = users.id')
            ->join('agents', 'agents.user_id  = users.id', 'left')
            ->where('users.role_id', 2)
            ->where('tickets.cancel_status', 0)
            ->where('tickets.refund', 0)
            ->groupBy('users.id')
            ->findAll();

        return  $returnData;
    }

    public function getTicketBookingByMonth()
    {
        $totalArray = array();

        $this->ticketModel->select('Month(created_at) as month')->selectSum('totalseat')
            ->where('tickets.cancel_status', 0)
            ->where('tickets.refund', 0);

        if (session()->get('role_id') != 1) {
            $userId = session()->get('user_id');
            $this->ticketModel->where('bookby_user_id', $userId);
        }

        $ticketbook = $this->ticketModel->groupBy('Month(created_at)')->findAll();

        $assendingMonth = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"];
        $checkMonth = array();
        foreach ($ticketbook as $evalue) {
            array_push($checkMonth, $evalue->month);
        }
        $diffresult = array_diff($assendingMonth, $checkMonth);
        foreach ($diffresult as $rvalue) {
            $Input = new \stdClass;
            $Input->totalseat = 0;
            $Input->month = $rvalue;
            array_push($ticketbook, $Input);
        }
        foreach ($ticketbook as $value) {
            $totalArray[$value->month] =    $value->totalseat;
        }

        ksort($totalArray);
        return $totalArray;
    }

    public function money()
    {
        $test = 100;
        return $test;
    }
}
