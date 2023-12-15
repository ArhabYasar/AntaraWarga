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
        Schema::create('chat', function (Blueprint $table) {
            $table->id();
            $table->text('isi_pesan'); // Mengganti 'pesan' menjadi 'isi_pesan'
            $table->unsignedBigInteger('pengirim_id'); // Mengganti 'pengirim' menjadi 'pengirim_id'
            $table->unsignedBigInteger('diskusi_id');
            $table->timestamps();

            $table->foreign('diskusi_id')->references('id')->on('diskusi'); // Mengganti 'topik_id' menjadi 'diskusi_id'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chat');
    }
};
