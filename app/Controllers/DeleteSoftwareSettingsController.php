<?php

namespace App\Controllers;

use App\Libraries\DeleteData;
use App\Libraries\DeleteData\DeleteData as DeleteDataBase;
// use CodeIgniter\Config\Services;

class DeleteSoftwareSettingsController extends BaseController
{
    private $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function confirmation(string $target, int $id)
    {
        $t = $this->buildTarget($target);
        $t->buildDeleteIndex();
        $t->setDeleteId($id);

        $tdArr = array();
        $toDelete = $t->init();

        foreach ($toDelete as $deleteObj) {
            /**
             * @var DeleteDataBase $deleteObj
             * @var string $table
             */
            $title = $deleteObj->getTitle();
            $table = $deleteObj->model()->gettable();

            try {
                $data = $deleteObj->model()->findAll();
            } catch (\Throwable $e) {
                dd($e->getMessage(), $deleteObj->model()->builder()->getCompiledSelect());
            }

            if ($tdArr && ($index = array_search($table, array_column($tdArr, 'table'))) !== false) {
                $mergedData = array_merge($tdArr[$index]['data'], $data);
                $uniqueData = array_values(array_intersect_key($mergedData, array_unique(array_column($mergedData, 'id'))));
                $tdArr[$index]['data'] = $uniqueData;
            } else {
                $tdArr[] = ['table' => $table, 'title' => $title, 'data' => $data];
            }

            //dd($tdArr);

            $deleteObj->drawCallback($table, $data);
        }

        $tdArr = array_reverse(array_filter($tdArr, fn ($v) => $v['data']));
        $action = route_to('ss-delete', $target, $id);
        $ref = $this->request->getServer('HTTP_REFERER', FILTER_SANITIZE_URL);
        return view('common/delete-confirmation', compact('tdArr', 'action', 'ref'));
    }

    public function delete(string $target, int $id = null, string $cond = null)
    {
        $t = $this->buildTarget($target);
        $t->reset();
        $t->buildDeleteIndex();
        $id && $t->setDeleteId($id);
        $cond && $t->setDeleteCondition($cond);
        $ref = $this->request->getVar('ref');

        try {
            $table = '';
            $this->db->transStart();

            foreach ($t->init() as $deleteObj) {
                /**
                 * @var DeleteDataBase $deleteObj
                 * @var string $table
                 */
                $table = $deleteObj->model()->gettable();
                $result = $deleteObj->model()->findAll();

                if ($deleteIds = array_column($result, 'id')) {
                    // perform delete operation
                    $this->db->table($table)
                        ->whereIn('id', $deleteIds)
                        ->set('deleted_at', date('Y-m-d H:i:s'))
                        ->update();

                    // delete callback
                    $deleteObj->deleteCallback($table, $result);
                }
            }
        } catch (\Throwable $e) {
            $this->db->transRollback();
            dd($e->getMessage(), $table);
            return redirect()->to($ref)->with('fail', $e->getMessage());
        }

        $this->db->transCommit();
        return redirect()->to($ref)->with('fail', 'Data Deleted !');
    }

    public function truncate(string $target, string $cond = '1')
    {
        $t = $this->buildTarget($target);
        $t->reset();
        $t->buildDeleteIndex();
        $t->setDeleteCondition($cond);

        try {
            $this->db->transStart();

            // Session: Foreign key check disable
            $this->db->query('SET SESSION FOREIGN_KEY_CHECKS=0');

            foreach ($t->init() as $deleteObj) {
                /**
                 * @var DeleteDataBase $deleteObj
                 * @var string $table
                 */
                $table = $deleteObj->model()->gettable();
                $result = $deleteObj->model()->withDeleted()->findAll();

                if ($deleteIds = array_column($result, 'id')) {
                    // perform delete operation
                    $this->db->table($table)
                        ->whereIn('id', $deleteIds)
                        ->delete();

                    // delete callback
                    $deleteObj->deleteCallback($table, $result);
                }
            }

            // Truncate main table
            $cond == '1' && $t->model()->truncate();

            // Session: Re-enable Foreign key check
            $this->db->query('SET SESSION FOREIGN_KEY_CHECKS=1');
        } catch (\Throwable $e) {
            // DB Rollback
            $this->db->transRollback();
            throw $e;
        }

        // Commit and return success response
        $this->db->transCommit();
        return true;
    }

    private function buildTarget(string $target): DeleteDataBase
    {
        switch ($target) {
            case 'account':
                return new DeleteData\SoftwareSettings\Account;

            case 'fleet':
                return new DeleteData\SoftwareSettings\Fleet;

            case 'vehicle':
                return new DeleteData\SoftwareSettings\Vehicle;

            case 'fitness':
                return new DeleteData\SoftwareSettings\Fitness;

            case 'trip':
                return new DeleteData\SoftwareSettings\Trip;

            case 'subtrip':
                return new DeleteData\SoftwareSettings\SubTrip;

            case 'coupon':
                return new DeleteData\SoftwareSettings\Coupon;

            case 'location':
                return new DeleteData\SoftwareSettings\Location;

            case 'stand':
                return new DeleteData\SoftwareSettings\Stand;

            case 'schedule':
                return new DeleteData\SoftwareSettings\Schedule;

            case 'schedulefilter':
                return new DeleteData\SoftwareSettings\ScheduleFilter;

            case 'facility':
                return new DeleteData\SoftwareSettings\Facility;

            case 'ticket':
                return new DeleteData\SoftwareSettings\Ticket;

            case 'agent':
                return new DeleteData\SoftwareSettings\Agent;

            case 'employee':
                return new DeleteData\SoftwareSettings\Employee;

            case 'user':
                return new DeleteData\SoftwareSettings\User;

            case 'tax':
                return new DeleteData\SoftwareSettings\Tax;

            case 'rating':
                return new DeleteData\SoftwareSettings\Rating;

            default:
                throw new \Exception('Target module ' . $target . ' not found !');
        }
    }
}
