<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ahorro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('ahorro', function (Blueprint $table) {
            $table->bigIncrements('id_ahorro');
            $table->integer('id_cuenta')->unsigned();
            $table->string('tipo_ahorro');
            #$table->foreign('id_cuenta')->references('id')->on('credito')->onDelete('cascade');
            
        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
