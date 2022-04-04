<?php

use App\Travel;
use Illuminate\Database\Seeder;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $travel = new Travel();

        $travel->destinazione = 'Finlandia';
        $travel->prezzo = 845;
        $travel->descrizione = 'sdhfgyuihvcgiuy';
        $travel->durata = 5;
        $travel->tipo_alloggio = 'Hotel';
        $travel->numero_persone = 3 ;
        $travel->valutazione = 8.5;

        $travel->save();
    }
}
