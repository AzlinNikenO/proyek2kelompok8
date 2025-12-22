<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('jenis_pengajuan');
            // contoh: ktp, kk, kia, domisili

            $table->enum('status', [
                'menunggu',
                'diproses',
                'ditolak',
                'selesai'
            ])->default('menunggu');

            $table->text('catatan_admin')->nullable();

            $table->json('data_pengajuan');
            // isi: nik, no_kk, file_ktp, file_kk, dll (beda tiap jenis)

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengajuans');
    }
};
