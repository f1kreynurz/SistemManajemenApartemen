<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('kontrak', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_unit');
            $table->unsignedBigInteger('id_penyewa');
            $table->date('tanggal_mulai');
            $table->date('tanggal_berakhir');
            $table->decimal('biaya_sewa', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kontrak');
    }
};
