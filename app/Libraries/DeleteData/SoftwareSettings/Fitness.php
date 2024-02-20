<?php

namespace App\Libraries\DeleteData\SoftwareSettings;

use App\Libraries\DeleteData\DeleteData;
use Modules\Fitness\Models\FitnessModel;

class Fitness extends DeleteData
{
    public function __construct()
    {
        $this->title = 'fitnesses';
        $this->model = new FitnessModel;
        $this->model->select('fitnesses.id, fitnesses.fitness_name AS name');
    }
}
