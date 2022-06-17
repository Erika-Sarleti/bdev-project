<?php

use Illuminate\Database\Seeder;
use App\Sponsor;
use Faker\Generator as Faker;

class SponsorSeeder extends Seeder
{
    public function run()
    {
        $sponsors =[
            [
                'time'=> '24',
                'price'=>2.99,
            ],
            [
                'time'=> '48',
                'price'=>5.99,
            ],
            [
                'time'=> '72',
                'price'=>9.99,
            ]
            ];
        foreach($sponsors as $sponsor){
            Sponsor::create([
                'time'=> $sponsor['time'],
                'price'=> $sponsor['price'],
            ]);

        }
    }
}
