<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Title;
use Illuminate\Support\Str;


class TitlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 20 ; $i++) {

        $title = $faker->sentence(3);

        $newTitle = new Title;

        $newTitle->section_id = rand(1,20);
        $newTitle->title = $title;
        $newTitle->slug = Str::slug($title);
        $newTitle->text = $faker->sentence(3);

        $newTitle->save();

      }

    }
}
