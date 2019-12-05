<?php

use Illuminate\Database\Seeder;

class Fixed_imageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('fixed_image')->insert([
          'id' => 1,
          'title' => 'Fixed 1',
          'slug' => 'fixed-1',
          'text' => 'Ricomincia a vivere con leggerezza.',
          'image' => 'http://localhost:8000/storage/claim.png'
      ]);

    }
}
