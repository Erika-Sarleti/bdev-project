<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;
class UserSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        $faker ->addProvider(new \Faker\Provider\it_IT\ Person($faker));




        for ($i=0; $i <20 ; $i++) {
            $faker ->addProvider(new \Faker\Provider\it_IT\ Person($faker));
            $arrslug = [
                'name'              =>  $faker->firstName(),
                'surname'           =>  $faker->lastName(),
            ];
            $fullname = implode(' ', $arrslug );

            User::create([
                'name'              =>  $arrslug['name'],
                'surname'           =>  $arrslug['surname'],
                'email'             =>  $faker->email(),
                'password'          =>  Hash::make('camillapalombi'),
                'slug'              =>  User::generateSlug($fullname),
              ]);
        }
    }
}
