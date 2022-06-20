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
            Message::create([
            'user_id'           =>  $user->id,
            'guest_mail'        =>  $faker->email(),
            'message'           =>  $message,
          ]);

        
    }
}
}
