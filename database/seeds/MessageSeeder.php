<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\User;
use App\Message;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker, Message $message)
    {
        $users = User::all();

        foreach ($users as $user) {
            $n = rand(1, 7);
            for ($i= 0; $i< $n; $i++ ){
                Message::create([
                'user_id'           =>  $user->id,
                'guest_mail'        =>  $faker->email(),
                'message'           =>  $faker->text(),
          ]);
        }  
        
    }
}
}
