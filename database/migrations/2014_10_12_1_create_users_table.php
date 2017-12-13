<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            // $table->increments('id');
            $table->increments('id');
            $table->string('n_noidentitas')->length(18);
            $table->string('ktp')->length(16);
            $table->integer('thn_ajaran')->length(4);
            $table->string('nama_anggota')->length(100);
            $table->string('propinsi')->length(10);
            $table->string('kabupaten')->length(10);
            $table->string('kecamatan')->length(10);
            $table->string('kelurahan')->length(10);
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['P', 'W']);
            $table->string('goldarah')->length(2);
            $table->string('status')->length(12);
            $table->string('agama')->length(15);
            $table->string('pekerjaan')->length(40);
            $table->text('alamat');
            $table->string('rtrw')->length(7);
            $table->string('email')->length(100)->unique();
            $table->string('nohp')->length(15);
            $table->string('admin_entry')->length(20);
            $table->string('username')->length(100)->unique();
            $table->string('password')->length(100)->default('$2y$10$vbgknoykOPW/v3UTsd9VlOS0GZpIXVrwUNGIViqABnY2uaVapQgPO'); // default "password"
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
