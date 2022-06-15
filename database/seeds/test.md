<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\UserInfo;
use App\User;
use Illuminate\Database\Eloquent\Model;
class UserInfo extends Seeder;
{
    public function run(Faker $faker)
    {
            $users = User::all();
            foreach ($users as $user) {
                $faker -> addProvider(new \Faker\Provider\it_IT\Address($faker));
                UserInfo::create([
                'cv'                =>  $faker->image(),
                'image'             =>  'https://picsum.photos/id/' . rand(0, 1084) . '/640/480/',
                'locality'          =>  $faker->state(),
                'github'            =>  $faker->url(),
                'description'       =>  $faker->text(),
                'role'              =>  $faker->randomElement(['Full Stack Web Developer', 'Front End Web Developer','Back End Web Developer', 'Data Analyst']),
                'phone'             =>  $faker->phoneNumber(),
              ]);
            }
    }
}
