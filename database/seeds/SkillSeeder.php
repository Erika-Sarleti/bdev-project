<?php

use Illuminate\Database\Seeder;
use App\Skill;
use Faker\Generator as Faker;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = [
            'Javascript',
            'HTML',
            'CSS',
            'Angular',
            'Vue',
            'Graphic Design',
            'Java',
            'Gameboy advance'
        ];
        foreach($skills as $skill){
            Skill::create([
                'name'=> $skill,
            ]);
            
        }
    }
}
