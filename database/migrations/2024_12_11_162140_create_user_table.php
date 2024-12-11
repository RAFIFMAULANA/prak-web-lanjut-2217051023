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
    Schema::create('user', function (Blueprint $table) {
        $table->id(); // Primary key
        $table->string('nama'); // Nama user
        $table->string('npm'); // NPM user
        $table->foreignId('kelas_id') // Foreign key ke tabel kelas
              ->constrained('kelas') // Menghubungkan ke tabel kelas
              ->onDelete('cascade'); // Menghapus user jika kelas terkait dihapus
        $table->timestamps(); // Kolom created_at dan updated_at
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
