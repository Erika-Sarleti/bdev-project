<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;
class UserSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        for ($i=0; $i <20 ; $i++) {

            $faker ->addProvider(new \Faker\Provider\it_IT\ Person($faker));
            User::create([
                'name'              =>  $faker->firstName(),
                'surname'           =>  $faker->lastName(),
                'email'             =>  $faker->email(),
                'password'          =>  Hash::make('camillapalombi'),
              ]);
        }
    }
}
