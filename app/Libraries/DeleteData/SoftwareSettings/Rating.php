<?php

namespace App\Libraries\DeleteData\SoftwareSettings;

use App\Libraries\DeleteData\DeleteData;
use Modules\Rating\Models\RatingModel;

class Rating extends DeleteData
{
    public function __construct()
    {
        $this->title = 'ticket ratings';
        $this->model = new RatingModel;
        $this->model->select('ratings.id, CONCAT(ratings.rating, " ", ratings.comments) AS name');
    }
}
