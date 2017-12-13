<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kategori_id');
            $table->integer('subkategori_id');
            $table->integer('itemkategori_id');
            $table->string('nama_barang');
            $table->integer('satuan_barang_id');
            $table->string('brand');
            $table->integer('stok')->default(0);
            $table->integer('harga_beli');
            $table->integer('harga_jual');
            $table->text('keterangan');
            $table->datetime('tanggal_expired');
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
        Schema::dropIfExists('barangs');
    }
}
