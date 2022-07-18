<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
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
            $table->string('azienda' , 20);
            $table->string('stazione_partenza',50);
            $table->string('stazione_arrivo',50)->nullable(false);
            $table->time('orario_partenza')->nullable(false);
            $table->time('orario_arrivo')->nullable(false);
            $table->date('giorno_di_partenza');
            $table->string('codice_treno', 5)->nullable(false);
            $table->unsignedTinyInteger('numero_carrozze');
            $table->boolean('in_orario');
            $table->boolean('cancellato');
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
}