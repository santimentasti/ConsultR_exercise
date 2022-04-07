<?php

use Illuminate\Database\Seeder;

class SuperheroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$first = true;
        $f = fopen(public_path('csv/superheros.csv'), 'r');
		while (($data = fgetcsv($f)) !== false) {
				if($first){
					$first = false;
					continue;
				}
				App\Superhero::create([
				'id'			=> $data[0],
				'name'			=> $data[1],
				'fullName'		=> $data[2],
				'strength'		=> $data[3],
				'speed'			=> $data[4],
				'durability'	=> $data[5],
				'power'			=> $data[6],
				'combat'		=> $data[7],
				'race'			=> $data[8],
				'height/0'		=> $data[9],
				'height/1'		=> $data[10],
				'weight/0'		=> $data[11],
				'weight/1'		=> $data[12],
				'eyeColor'		=> $data[13],
				'hairColor'		=> $data[14],
				'publisher'		=> $data[15],
			]);
		}
	}
}

