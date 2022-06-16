<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Sponsor;

class SponsorUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();

        foreach ($users as $user) {

            $userSponsor = Sponsor::inRandomOrder()
                    ->limit(rand(1,2))->get();
            
            $user->sponsors()->attach($userSponsor->pluck('id')->all());
        }
    }
}
