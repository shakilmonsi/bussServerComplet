<?php

namespace App\Libraries\DeleteData\SoftwareSettings;

use App\Libraries\DeleteData\DeleteData;
use Modules\Ticket\Models\TemporaryBook as TemporaryBookModel;

class TemporaryBook extends DeleteData
{
    public function __construct()
    {
        $this->title = 'temporary books';
        $this->model = new TemporaryBookModel;
        $this->model->select('temporarybooks.id, temporarybooks.ticket_token AS name');
    }
}
