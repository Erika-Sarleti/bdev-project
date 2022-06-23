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
            $n = rand(1, 7);
            for ($i= 0; $i< $n; $i++ ){
                Review::create([
                            'user_id'           =>  $user->id,
                            'review'        =>  $faker->text(),
                            'rating'           =>  $faker->numberBetween(1, 5),
                        ]);
            }    
    }
}
}
