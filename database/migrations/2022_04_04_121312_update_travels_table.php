<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('travels', function (Blueprint $table) {

            $table->string('destinazione', 50)->after('id');
            $table->decimal('prezzo', 6, 2)->after('destinazione');
            $table->text('descrizione')->after('prezzo');
            $table->unsignedTinyInteger('durata')->after('descrizione');
            $table->string('tipo_alloggio', 50)->after('durata');
            $table->unsignedTinyInteger('numero_persone')->after('tipo_alloggio');
            $table->decimal('valutazione', 3, 1)->after('numero_persone');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('travels', function (Blueprint $table) {
            
            $table->dropColumn(['destinazione', 'prezzo', 'descrizione', 'durata', 'tipo_alloggio', 'numero_persone', 'valutazione']);
        });
    }
}
