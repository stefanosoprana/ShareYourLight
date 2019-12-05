<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Subtitle;
use Illuminate\Support\Str;


class SubtitlesTableSeeder extends Seeder
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

        $newSubtitle = new Subtitle;

        $newSubtitle->section_id = rand(1,20);
        $newSubtitle->title = $title;
        $newSubtitle->slug = Str::slug($title);
        $newSubtitle->text = $faker->sentence(2);



        $newSubtitle->save();

      }

    }
}
