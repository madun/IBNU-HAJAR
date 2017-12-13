<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSahamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sahams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id')->length(16);
            $table->bigInteger('jml_saham1');
            $table->bigInteger('jml_saham2')->nullable()->default(0);
            $table->bigInteger('jml_saham3')->nullable()->default(0);
            $table->bigInteger('jml_saham4')->nullable()->default(0);
            $table->bigInteger('jml_saham5')->nullable()->default(0);
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
        Schema::dropIfExists('sahams');
    }
}
