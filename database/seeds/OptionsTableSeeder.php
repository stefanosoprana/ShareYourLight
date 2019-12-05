<?php

use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('options')->insert([
          'logo' => 'http://localhost:8000/storage/logo.png',
          'copyright' => 'Con il contributo non condizionante di Johnson & Johnson Medical SpA',
          'credits' => 'Agenzia coordinatore del progetto: Edelman Digital Machine'
      ]);
    }
}
