<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      $newUser = new User;

      $newUser->name = 'Stefano';
      $newUser->email = 'admin@admin.com';
      $newUser->password = Hash::make("admin");

      $newUser->save();


      for ($i=0; $i < 10 ; $i++) {

        $newUser = new User;
        $newUser->name = $faker->name;
        $newUser->email = $faker->email;
        $newUser->password = Hash::make("$faker->password");

        $newUser->save();
      }
    }
}
