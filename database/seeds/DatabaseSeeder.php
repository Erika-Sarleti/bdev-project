<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
// use Illuminate\Database\UserInfoSeeder;

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
    }
}
