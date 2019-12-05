<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Section;
use Illuminate\Support\Str;


class SectionsTableSeeder extends Seeder
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

        $newSection = new Section;

        $newSection->title = $title;
        $newSection->page_id = rand(1,10);
        $newSection->slug = Str::slug($title);

        $newSection->save();
    }
  }
}
