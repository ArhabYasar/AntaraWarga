<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('votes', function (Blueprint $table) {
            // Hapus kolom user_id
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }

    public function down()
    {
        Schema::table('votes', function (Blueprint $table) {
            // Jika perlu membatalkan, tambahkan kembali kolom user_id
            $table->foreignId('user_id')->constrained();
        });
    }
};
