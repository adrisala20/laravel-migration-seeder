<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 255);
            $table->string('stazione_di_partenza',255);
            $table->string('stazione_di_arrivo',255);
            $table->timeTz('orario_di_partenza', $precision = 0);
            $table->timeTz('orario_di_arrivo', $precision = 0);
            $table->string('codice_treno',5);
            $table->smallInteger('numero_carrozze');
            $table->boolean('in_orario');
            $table->boolean('cancellato');
            $table->string('tipo_di_treno',255);
            $table->string('disponibilità_posti',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
