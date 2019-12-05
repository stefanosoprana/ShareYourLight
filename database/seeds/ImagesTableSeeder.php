<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Image;
use Illuminate\Support\Str;


class ImagesTableSeeder extends Seeder
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

        $newImage = new Image;

        $newImage->title = $title;
        $newImage->section_id = rand(1,10);
        $newImage->slug = Str::slug($title);

        $newImage->path = $faker->imageUrl($width = 640, $height = 480, 'city');

        $newImage->save();

      }
    }
}
