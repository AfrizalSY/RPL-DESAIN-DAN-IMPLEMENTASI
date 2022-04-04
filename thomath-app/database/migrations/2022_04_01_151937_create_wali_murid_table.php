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
        Schema::create('wali_murid', function (Blueprint $table) {
            $table->id('id_wali_murid');
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('no_hp');
            $table->unsignedBigInteger('id_konsultasi');
            $table->foreign('id_konsultasi')->references('id_konsultasi')->on('konsultasi');
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
        Schema::dropIfExists('wali_murid');
    }
};
