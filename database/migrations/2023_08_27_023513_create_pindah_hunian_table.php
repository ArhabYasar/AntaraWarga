<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePindahHunianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pindah_hunian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pindah_id');
            $table->unsignedBigInteger('warga_id');
            $table->unsignedBigInteger('hunian_id');
            $table->timestamps();

            $table->foreign('pindah_id')->references('id')->on('pindah')->onDelete('cascade');
            $table->foreign('warga_id')->references('id')->on('warga')->onDelete('cascade');
            $table->foreign('hunian_id')->references('id')->on('hunian')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pindah_hunian');
    }
}
