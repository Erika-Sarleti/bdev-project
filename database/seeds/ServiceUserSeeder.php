<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Service;

class ServiceUserSeeder extends Seeder
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

            $userService = Service::inRandomOrder()
                    ->limit(rand(1, 2))->get();
            
            $user->services()->attach($userService->pluck('id')->all());

            



            //$user->services()->attach($user, ['price' => mt_rand(50, 3000)]);



            //$user->services()->withPivot()->attach(['price' => $randomPrice]);
            
        }
    }
}
