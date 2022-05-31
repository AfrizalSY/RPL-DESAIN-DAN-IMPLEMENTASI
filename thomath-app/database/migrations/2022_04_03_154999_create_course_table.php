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
        Schema::create('course', function (Blueprint $table) {
            $table->id('id_course');
            $table->string('name');
            $table->text('description');
            // $table->unsignedBigInteger('material')->default(0);
            // $table->unsignedBigInteger('created_by');
            $table->foreignId('created_by');
            $table->foreignId('course_material')->nullable();
            //$table->foreign('material')->references('id_course_material')->on('course_material')->unique();
            // $table->foreign('created_by')->references('id_pengajar')->on('pengajar');
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
        Schema::dropIfExists('course');
    }
};