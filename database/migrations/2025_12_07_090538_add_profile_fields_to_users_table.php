<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {

            $table->string('nik', 20)->unique()->after('id');
            $table->string('nokk', 20)->after('nik');
            $table->string('ttl')->after('nokk');

            $table->enum('jk', ['Laki-laki', 'Perempuan', 'Lainnya'])->after('ttl');
            $table->string('jk_lainnya')->nullable()->after('jk');

            $table->text('alamat')->after('jk_lainnya');
            $table->string('agama', 50)->after('alamat');
            $table->string('hp', 20)->after('agama');

            $table->string('photo')->after('password');

            // ⚠️ INI WAJIB
            $table->enum('role', ['user', 'admin'])->default('user')->after('photo');
        });
    }

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
                'photo',
                'role'
            ]);
        });
    }
};
