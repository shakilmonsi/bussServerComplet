<?php

namespace App\Libraries\DeleteData\SoftwareSettings;

use App\Libraries\DeleteData\DeleteData;
use Modules\Fleet\Models\Vehicalimage;

class VehicleImage extends DeleteData
{
    public function __construct()
    {
        $this->title = 'vehicle images';
        $this->model = new Vehicalimage;
        $this->model->select('vehicalimages.id, vehicalimages.img_path AS name');
    }

    public function deleteCallback(string $table, array $deleteData = [])
    {
        if ($table == 'vehicalimages') {
            foreach ($deleteData as $single) {
                $vehicleImageFullPath = FCPATH . $single->name;
    
                if (file_exists($vehicleImageFullPath)) {
                    unlink($vehicleImageFullPath);
                }
            }
        }
    }
}
