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
        Schema::create('pengingat', function (Blueprint $table) {
            $table->id();
            $table->integer('nominal');
            $table->date('tanggal');
            $table->bigInteger('iuran_id');
            $table->bigInteger('warga_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengingat');
    }
};
