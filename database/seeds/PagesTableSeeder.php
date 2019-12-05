<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Page;
use Illuminate\Support\Str;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 20 ; $i++) {

        $title = $faker->sentence(2);

        $newPage = new Page;
        $newPage->title = $title;
        $newPage->user_id = rand(1,2);
        $newPage->slug = Str::slug($title);
        $newPage->description = $faker->text;

        $newPage->save();
      }
    }
}
