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
        Schema::table('trains', function (Blueprint $table) {
            $table->time('orario_di_partenza', $precision = 0)->change();
            $table->time('orario_di_arrivo', $precision = 0)->change();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->timeTz('orario_di_partenza', $precision = 0)->change();
            $table->timeTz('orario_di_arrivo', $precision = 0)->change();
           
        });
    }
};
