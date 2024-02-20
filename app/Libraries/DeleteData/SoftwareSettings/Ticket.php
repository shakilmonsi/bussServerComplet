<?php

namespace App\Libraries\DeleteData\SoftwareSettings;

use App\Libraries\DeleteData\DeleteData;
use Modules\Ticket\Models\TicketModel;

class Ticket extends DeleteData
{
    public function __construct()
    {
        $this->title = 'tickets';
        $this->model = new TicketModel;
        $this->model->select('tickets.id, tickets.booking_id AS name');

        $this->relatives[] = [new AgentCommissions, 'booking_id', 'booking_id'];
        $this->relatives[] = [new AgentTotals, 'booking_id', 'booking_id'];
        $this->relatives[] = [new TicketCancels, 'booking_id', 'booking_id'];
        $this->relatives[] = [new CouponDiscount, 'booking_id', 'booking_id'];
        $this->relatives[] = [new PayGatewayTotals, 'booking_id', 'booking_id'];
        $this->relatives[] = [new PayMethodTotals, 'booking_id', 'booking_id'];
        $this->relatives[] = [new JourneyList, 'booking_id', 'booking_id'];
        $this->relatives[] = [new PartialPaid, 'booking_id', 'booking_id'];
        $this->relatives[] = [new Rating, 'booking_id', 'booking_id'];
        $this->relatives[] = [new Refund, 'booking_id', 'booking_id'];
    }
}
