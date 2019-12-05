<?php

use Illuminate\Database\Seeder;

class CommunityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('community')->insert([
          'id' => 1,
          'title' => 'La community',
          'slug' => 'la-community',
          'description' => 'L’ obiettivo di “Share your light – Oltre l’Obesità, storie di nuovi inizi” è costruire una community dove chi ha affrontato e curato l’obesità possa condividere il proprio percorso di rinascita ed essere da ispirazione e sostegno per chi è ancora alle prese con questa patologia. Ogni settimana nuovi spunti, riflessioni e momenti di condivisione dedicati soprattutto a chi ha perduto la speranza di affrontare l’obesità e ha bisogno della forza e dell’esempio di chi ce l’ha fatta per intraprendere un percorso di cura efficace.',
          'claim' => 'Sei un paziente obeso o hai un familiare o un amico in grave sovrappeso? Insieme, possiamo sconfiggere l\'obesità. Condividi la tua storia, le tue esperienze, le tue emozioni.',
          'button' => 'Facciamo gruppo, unisciti a noi!',
          'button_link' => 'https://it-it.facebook.com'
      ]);
    }
}
