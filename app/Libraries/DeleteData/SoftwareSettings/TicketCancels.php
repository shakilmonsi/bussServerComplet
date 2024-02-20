<?php

namespace App\Libraries\DeleteData\SoftwareSettings;

use App\Libraries\DeleteData\DeleteData;
use Modules\Ticket\Models\CancelModel;
use Modules\Ticket\Models\TicketModel;

class TicketCancels extends DeleteData
{
    public function __construct()
    {
        $this->title = 'ticket cancels';
        $this->model = new CancelModel;
        $this->model->select('cancels.id, cancels.booking_id AS name');
    }
}
