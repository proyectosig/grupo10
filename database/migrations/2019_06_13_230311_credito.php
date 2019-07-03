<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Credito extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('credito', function (Blueprint $table) {
            $table->bigIncrements('id_credito');
            $table->integer('id_cuenta')->unsigned();
            $table->date('fechainicio');
            $table->date('fechafinal');
            $table->float('monto');
            $table->float('interes');   
            $table->boolean('estado');
            $table->date('periodo');
            $table->float('saldo');
           # $table->foreign('id_cuenta')->references('id')->on('cuenta')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credito');
    }
}
