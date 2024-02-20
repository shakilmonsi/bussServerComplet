<?php

namespace App\Libraries\DeleteData\SoftwareSettings;

use App\Libraries\DeleteData\DeleteData;
use Modules\Location\Models\LocationModel;

class Location extends DeleteData
{
    public function __construct()
    {
        $this->title = 'locations';
        $this->model = new LocationModel;
        $this->model->select('locations.id, locations.name');

        $this->relatives[] = [new Agent, 'location_id'];

        $this->relatives[] = [new Trip, 'pick_location_id'];
        $this->relatives[] = [new Trip, 'drop_location_id'];
        $this->relatives[] = [new SubTrip, 'pick_location_id'];
        $this->relatives[] = [new SubTrip, 'drop_location_id'];
    }

    public function deleteCallback(string $table, array $deleteData = [])
    {
        $db = \Config\Database::connect();

        if ($table == 'locations') {
            foreach ($deleteData as $data) {
                $stoppageId = $data->id;
    
                $trips = $db->table('trips')
                    ->select('id, stoppage')
                    ->where('FIND_IN_SET(' . $stoppageId . ', stoppage)', null, false)
                    ->get()->getResult();
    
                foreach ($trips as $trip) {
                    $stoppageArr = explode(',', $trip->stoppage);
                    $newStoppageArr = array_filter($stoppageArr, fn($v) => $v && $v != $stoppageId);
                    $db->table('trips')->set('stoppage', implode(',', $newStoppageArr))->where('id', $trip->id)->update();
                }
            }
        }
    }
}
