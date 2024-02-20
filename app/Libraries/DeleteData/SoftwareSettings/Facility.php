<?php

namespace App\Libraries\DeleteData\SoftwareSettings;

use App\Libraries\DeleteData\DeleteData;
use CodeIgniter\Database\RawSql;
use Modules\Trip\Models\FacilityModel;

class Facility extends DeleteData
{
    public function __construct()
    {
        $this->title = 'facilities';
        $this->model = new FacilityModel;
        $this->model->select('facilitys.id, facilitys.name');
    }

    public function deleteCallback(string $table, array $deleteData = [])
    {
        $db = \Config\Database::connect();

        if ($table == 'facilitys') {
            foreach ($deleteData as $data) {
                $facilityId = $data->id;
    
                $trips = $db->table('trips')
                    ->select('id, facility')
                    ->where('FIND_IN_SET(' . $facilityId . ', facility)', null, false)
                    ->get()->getResult();
    
                foreach ($trips as $trip) {
                    $facilityArr = explode(',', $trip->facility);
                    $newFacilityArr = array_filter($facilityArr, fn($v) => $v && $v != $facilityId);
                    $db->table('trips')->set('facility', implode(',', $newFacilityArr))->where('id', $trip->id)->update();
                }
            }
        }
    }
}
