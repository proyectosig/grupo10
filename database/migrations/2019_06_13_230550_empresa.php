<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Empresa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa', function (Blueprint $table) {
            $table->bigIncrements('id_empresa');
            $table->string('nombre');
            $table->string('giro');
           # $table->foreign('id_cuenta')->references('id')->on('cuenta_empresa')->onDelete('cascade');
        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return v   
     */
    public function down()
    {
        Schema::dropIfExists('empresa');
    }
}
