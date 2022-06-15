<?php

use Illuminate\Database\Seeder;
use App\Sponsor;
use Faker\Generator as Faker;

class SponsorSeeder extends Seeder
{
    public function run()
    {
        $time = [
            '24',
            '48',
            '72',
        ];
        foreach($sponsors as $sponsor){
            Skill::create([
                'name'=> $skill,
            ]);

        }
    }
}
