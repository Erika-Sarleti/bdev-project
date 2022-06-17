<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

use App\User;
use App\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $services = [
            'Manutenzione Sito',
            'Frontend',
            'Backend',
            'Design sito',
            'DevOps',
            'PM',
            'DBA',
            'Gameboy advance'
        ];

        foreach ($services as $service) {
            Service::create([
                'title' => $service,
                'description' => $faker->text(),
            ]);
        }

    }
}

