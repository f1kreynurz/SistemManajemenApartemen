<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('penyewa', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nomor_telepon');
            $table->string('email');
            $table->string('pekerjaan');
            $table->unsignedBigInteger('id_apartemen')->nullable();
            $table->unsignedBigInteger('id_user')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penyewa');
    }
};
