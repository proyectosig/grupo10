<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SocioCuenta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socio_cuenta', function (Blueprint $table) {
            $table->bigIncrements('id_cuenta');
            $table->integer('id_socio')->unsigned();
          #  $table->foreign('id_socio')->references('id')->on('socio')->onDelete('cascade');
          #  $table->foreign('id_cuenta')->references('id')->on('cuenta')->onDelete('cascade');
        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('socio_cuenta');
    }
}
