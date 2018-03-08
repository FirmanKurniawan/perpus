<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStokBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stok_bukus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judulbuku')->index();
            $table->foreign('judulbuku')->references('judulbuku')->on('daftar_bukus')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nomor_rak');
            $table->string('jumlahbuku');
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
        Schema::dropIfExists('stok_bukus');
    }
}
