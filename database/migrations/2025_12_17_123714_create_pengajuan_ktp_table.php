<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pengajuan_ktp', function (Blueprint $table) {
            $table->id();

            // relasi user
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // data pengajuan
            $table->string('jenis_pengajuan');
            $table->string('berkas');
            $table->text('keterangan')->nullable();

            // status proses
            $table->enum('status', ['menunggu', 'diproses', 'ditolak', 'selesai'])
                  ->default('menunggu');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengajuan_ktp');
    }
};
