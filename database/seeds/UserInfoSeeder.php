<?php

    // namespace Database\Seeders;
    use Illuminate\Database\Seeder;
    use Faker\Generator as Faker;
    use App\User;
    use App\UserInfo;

    class UserInfoSeeder extends Seeder
    {
        /**
        * Run the database seeds.
        *
        * @return void
        */
        public function run(Faker $faker)
        {
            $users = User::all();
            // UserInfo::create([
            //     'user_id'           =>  2000000,
            //     'cv'                =>  $faker->image('public/storage/images',400,300, null, false),
            //     'image'             =>  'https://picsum.photos/id/' . rand(0, 1084) . '/640/480/',
            //     'locality'          =>  'Riccione',
            //     'github'            =>  'molto carino',
            //     'description'       =>  'altrettanto carino',
            //     'role'              =>  $faker->randomElement(['Full Stack Web Developer', 'Front End Web Developer','Back End Web Developer', 'Data Analyst']),
            //     'phone'             =>  $faker->phoneNumber(),
            // ]);

            foreach ($users as $user) {
                $faker -> addProvider(new \Faker\Provider\it_IT\Address($faker));
                UserInfo::create([
                'user_id'           =>  $user->id,
                'cv'                =>  $faker->imageUrl(640, 480, 'animals', true),
                'image'             =>  'https://picsum.photos/id/' . rand(0, 1084) . '/640/480/',
                'locality'          =>  $faker->state(),
                'github'            =>  $faker->url(),
                'description'       =>  $faker->text(),
                'role'              =>  $faker->randomElement(['Full Stack Web Developer', 'Front End Web Developer','Back End Web Developer', 'Data Analyst']),
                'phone'             =>  $faker->phoneNumber(),
              ]);
            }
        }
    }

