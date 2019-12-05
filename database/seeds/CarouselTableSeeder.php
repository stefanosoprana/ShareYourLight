<?php

use Illuminate\Database\Seeder;

class CarouselTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('carousel')->insert([
        [
          'id' => 1,
          'title' => 'Il Progetto',
          'slug' => 'progetto',
          'subtitle1' => 'PERCHÈ SHARE YOUR LIGHT',
          'subtitle2' => 'I PROTAGONISTI E LE LORO STORIE',
          'text1' => 'Perché c\'è bisogno di una campagna di sensibilizzazione innovativa sul tema dell\'obesità. Non più un tabù, ma un\'esperienza raccontata da chi l\'ha sconfitta e ha ritrovato la “leggerezza”, che diventa anche una call to action immediata alla condivisione. Il racconto di sogni, vita vissuta, paure e progetti di chi ha affrontato con successo l’obesità diventa “luce” per chi ancora convive con la malattia e ha bisogno di supporto, fiducia, incoraggiamento.',
          'text2' => 'Le persone obese hanno bisogno di speranza e ispirazione per superare questa malattia. E nessuno può essere più autorevole e credibile di chi l\'ha già sconfitta. In questo sito avranno spazio i volti e le voci di chi si è lasciato l’obesità alle spalle e di chi sta lottando per superarla. Nelle loro parole e nelle loro emozioni sarà possibile trovare le ragioni e la forza per dare una svolta alla propria vita.'
        ],
        [
          'id' => 2,
          'title' => 'L\'Obesità',
          'slug' => 'obesità',
          'subtitle1' => 'COS\'È',
          'subtitle2' => 'UN APPROCCIO CORRETTO',
          'text1' => 'L’obesità è una patologia caratterizzata da un eccessivo accumulo di grasso corporeo, condizione che determina gravi danni alla salute. Nella maggior parte dei casi, l’obesità è causata da stili di vita scorretti: da una parte un’alimentazione ipercalorica e dall’altra un ridotto dispendio energetico, dovuto ad inattività fisica. Avere peso in eccesso non rappresenta solo un problema estetico, ma anche e soprattutto un problema di salute, che diminuisce in maniera importante l’aspettativa di vita e che influisce sul benessere psicologico e relazionale di chi ne è affetto.L’obesità si può quindi prevenire, ma soprattutto curare.',
          'text2' => 'Per curare in modo corretto l’obesità è necessario approcciare la malattia a 360°, ricorrendo al contributo di diversi specialisti: non solo internisti e chirurghi, ma anche psichiatri e psicologi, nutrizionisti e dietisti, endoscopisti, radiologi, pneumologi, cardiologi, anestesisti.Per contrastare i casi di obesità meno gravi, la combinazione di adeguate regole alimentari e movimento può risultare sufficiente, ma, in caso di fallimento, la terapia farmacologica può essere una soluzione percorribile soprattutto per i pazienti obesi di primo grado (con un IMC compreso tra 30 e 34). L’intervento di chirurgia bariatrica, invece, è indicato per i casi di obesità grave ed è in grado di garantire in breve tempo una considerevole diminuzione del peso ma, soprattutto, di garantire al paziente una maggiore speranza e qualità della vita. Negli ultimi decenni le procedure sono divenute sempre più sicure e meno invasive.'
        ]
      ]);
    }
}
