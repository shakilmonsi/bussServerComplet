<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AppSeeder extends Seeder
{
    public function run()
    {
        $all_table_data = array();

        // get json files 
        $all_seed_file = glob(ROOTPATH . '{app,modules/*}/Database/Seeds/table_data.json', GLOB_BRACE);
        $seed_sort_file = ROOTPATH . 'app/Database/Seeds/table_seed_sorts.json';

        // build table seed data
        foreach ($all_seed_file as $seeder_file) {
            $table_data = file_get_contents($seeder_file);
            $td_array = @json_decode($table_data, true);
            $all_table_data = array_merge($all_table_data, $td_array);
        }

        // build table seed sorting data
        $table_sorts = file_get_contents($seed_sort_file);
        $table_sort_array = @json_decode($table_sorts, true);
        $all_table_data = array_merge(array_flip($table_sort_array), $all_table_data);

        foreach ($all_table_data as $tname => $tseeds) {
            $this->db->table($tname)->insertBatch($tseeds);
        }
    }
}
