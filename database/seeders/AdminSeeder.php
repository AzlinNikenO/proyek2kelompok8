<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        Admin::create([
            'username' => 'admin',
            'email'    => 'admin@eazydesa.id',
            'password' => Hash::make('admin123'),
        ]);
    }
}
