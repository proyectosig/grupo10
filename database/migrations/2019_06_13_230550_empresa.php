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
        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return v   
     */
    public function down()
    {
        Schema::drop('empresa');
    }
}
