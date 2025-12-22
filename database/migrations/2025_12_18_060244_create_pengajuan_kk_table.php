<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('pengajuan_kk', function (Blueprint $table) {
            $table->id();

            // RELASI KE USERS
            $table->foreignId('user_id')
                  ->constrained('users')
                  ->cascadeOnDelete();

            // DATA PENGAJUAN
            $table->string('jenis_pengajuan');
            // contoh: baru, perubahan, hilang

            $table->string('berkas');
            // path / nama file upload

            $table->text('keterangan')->nullable();

            // STATUS PROSES
            $table->enum('status', [
                'menunggu',
                'diproses',
                'ditolak',
                'selesai'
            ])->default('menunggu');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengajuan_kk');
    }
};
