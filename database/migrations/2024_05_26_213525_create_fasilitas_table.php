<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('fasilitas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_apartemen');
            $table->string('nama');
            $table->string('deskripsi');
            $table->string('status');
            $table->string('jam_operasional');
            $table->integer('kapasitas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fasilitas');
    }
};
