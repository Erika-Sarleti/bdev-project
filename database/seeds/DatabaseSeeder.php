<?php
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(UserInfoSeeder::class);
        // $this->call('UserInfoSeeder');
        $this->call(MessageSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(ServiceUserSeeder::class);
        $this->call(SkillSeeder::class);
        $this->call(SkillUserSeeder::class);
        $this->call(SponsorSeeder::class);
        $this->call(SponsorUserSeeder::class);
    }
}
