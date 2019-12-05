<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Description;
use Illuminate\Support\Str;


class DescriptionsTableSeeder extends Seeder
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

        $newDescription = new Description;

        $newDescription->title = $title;
        $newDescription->section_id = rand(1,10);
        $newDescription->slug = Str::slug($title);
        $newDescription->text = $faker->text;;

        $newDescription->save();

    }
  }
}
