<?php

namespace App\Libraries\DeleteData\SoftwareSettings;

use App\Libraries\DeleteData\DeleteData;
use Modules\Ticket\Models\JourneylistModel;

class JourneyList extends DeleteData
{
    public function __construct()
    {
        $this->title = 'ticket journey lists';
        $this->model = new JourneylistModel;
        $this->model->select('journeylists.id, CONCAT(journeylists.first_name, " ", journeylists.last_name, " on booking ", journeylists.booking_id)  AS name');
    }
}
