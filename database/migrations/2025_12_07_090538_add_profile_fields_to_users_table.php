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
        Schema::table('users', function (Blueprint $table) {
            $table->string('nik', 20)->unique()->after('id');
            $table->string('nokk', 20)->after('nik');
            $table->string('ttl')->after('nokk'); // Tempat, tanggal lahir
            $table->enum('jk', ['Laki-laki', 'Perempuan', 'Lainnya'])->after('ttl');
            $table->string('jk_lainnya')->nullable()->after('jk');
            $table->text('alamat')->after('jk_lainnya');
            $table->string('agama', 50)->after('alamat');
            $table->string('hp', 20)->after('agama');
            $table->string('photo')->after('password'); // path foto/video
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'nik',
                'nokk',
                'ttl',
                'jk',
                'jk_lainnya',
                'alamat',
                'agama',
                'hp',
                'photo'
            ]);
        });
    }
};
