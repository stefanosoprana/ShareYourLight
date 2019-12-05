<?php

use Illuminate\Database\Seeder;

class SectionImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('section_image')->insert([
          [
            'title' => 'Claudio',
            'slug' => 'claudio',
            'image' => 'http://localhost:8000/storage/soggetto-1.png',
            'text' => 'Lui è Claudio',
            'age' => '65 anni'
          ],
          [
            'title' => 'Ilaria',
            'slug' => 'ilaria',
            'image' => 'http://localhost:8000/storage/soggetto-2.png',
            'text' => 'Lei è Ilaria',
            'age' => '41 anni'
          ],
          [
            'title' => 'Graziano',
            'slug' => 'graziano',
            'image' => 'http://localhost:8000/storage/soggetto-3.png',
            'text' => 'Lui è Graziano',
            'age' => '56 anni'
          ],
          [
            'title' => 'Maria Cristina',
            'slug' => 'maria-cristina',
            'image' => 'http://localhost:8000/storage/soggetto-4.png',
            'text' => 'Lei è Maria Cristina',
            'age' => '51 anni'
          ],
        ]);
    }
}
