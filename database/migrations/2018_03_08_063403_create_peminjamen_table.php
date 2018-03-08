<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeminjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjamen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namapeminjam');
            $table->string('alamatpeminjam');
            $table->string('judulbuku')->index();
            $table->foreign('judulbuku')->references('judulbuku')->on('daftar_bukus')->onUpdate('cascade')->onDelete('cascade');
            $table->string('tanggalpinjam');
            $table->string('tanggalkembali')->nullable();
            $table->string('denda')->nullable();
            $table->string('statuspeminjaman');
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
        Schema::dropIfExists('peminjamen');
    }
}
