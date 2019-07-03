<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CuentaEmpresa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuenta_empresa', function (Blueprint $table) {
            $table->bigIncrements('id_empresa')->unsigned();
            $table->integer('id_cuenta')->unsigned();
           # $table->foreign('id_cuenta')->references('id')->on('cuenta')->onDelete('cascade');
          #  $table->foreign('id_empresa')->references('id')->on('empresa')->onDelete('cascade');
        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CuentaEmpresa');
    }
}
