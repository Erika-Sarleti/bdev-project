<?php

use Illuminate\Database\Seeder;
use App\Skill;
use App\User;

class SkillUserSeeder extends Seeder
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

            $userSkill = Skill::inRandomOrder()
                    ->limit(rand(1, 5))->get();
            
            $user->skills()->attach($userSkill->pluck('id')->all());
        }
    }
}
