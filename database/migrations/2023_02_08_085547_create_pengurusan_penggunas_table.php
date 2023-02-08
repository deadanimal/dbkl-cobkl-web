<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengurusan_penggunas', function (Blueprint $table) {
            $table->id();
            $table->string('pengguna')->nullable();
            $table->string('pengenalan')->nullable();
            $table->string('nombor_pengenalan')->nullable();
            $table->string('nama')->nullable();
            $table->string('jantina')->nullable();
            $table->string('bangsa')->nullable();
            $table->string('telefon')->nullable();
            $table->string('emel')->nullable();
            $table->string('alamat')->nullable();
            $table->string('jawatan')->nullable();
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
        Schema::dropIfExists('pengurusan_penggunas');
    }
};
