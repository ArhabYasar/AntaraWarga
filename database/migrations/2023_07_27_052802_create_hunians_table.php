<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hunian', function (Blueprint $table) {
            $table->id();
            $table->string('alamat');
            $table->string('tipe');
            $table->string('luas_tanah');
            $table->string('luas_bangunan');
            $table->string('status_kepemilikan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hunian');
    }
};
