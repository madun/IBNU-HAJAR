<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kelurahan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('kelurahan', function (Blueprint $table) {
          $table->string('id_kel')->length('10');
          $table->string('id_kec')->length('6');
          $table->string('nama')->length('50');
          $table->integer('id_jenis')->length('11');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelurahan');
    }
}
