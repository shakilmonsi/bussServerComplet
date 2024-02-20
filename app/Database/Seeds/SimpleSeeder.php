<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SimpleSeeder extends Seeder
{
	public function run()
        {
			$emptyarray = array();
			$countryarray = array();
			$faker = \Faker\Factory::create();
			$builder = $this->db->table('user')
			 					->select('id')
								 ->get()->getResult();

			// $country = $this->db->table('country')
			//  					->select('id')
			// 					 ->get()->getResult();
			foreach($builder as $value)
			{
				$emptyarray[] = $value->id;
			
			}	

			// foreach($country as $cvalue)
			// {
			// 	$countryarray[] = $cvalue->id;
			
			// }	
			
			for ($i = 0; $i < 10; $i++) {

					$data = [
						// 'user_id' => $faker->randomElements($emptyarray),
						'person_detail'    => $faker->words(3, true),
						'description'    => $faker->paragraphs(5, true),
						'person_name'    => $faker->firstName(),
						// 'id_number'    => $faker->regexify('[A-Z]{5}[0-4]{3}'),
						// 'id_type'    => 'passport',
						'image'    => $faker->imageUrl(140,120, true),
						// 'link'    => base_url(),
						// 'country'    => $faker->randomElements($countryarray),
						'serial'    => $faker->randomNumber(1, true),
						
					];
					$this->db->table('section_four_detail')->insert($data);
			}
			
			
                // Using Query Builder
                // $this->db->table('section_one_home')->insert($data);
        }
}
