<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Generator as Faker;
use App\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();

        foreach ($users as $user) {
            Review::create([
            'user_id'           =>  $user->id,
            'review'        =>  $faker->text(),
            'rating'           =>  $faker->randomFloat(1, 1, 5),
          ]);
    }
}
}
