<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Data desa (global)
        $desa = [
            'nama'      => 'Desa Duko',
            'kecamatan' => 'Duko',
            'kabupaten' => 'Sumenep',
            'provinsi'  => 'Jawa Timur',
            'kodepos'   => '69463',
            'telepon'   => '0812-3456-7890',
            'email'     => 'kantordesa@desa.go.id',
            'jam'       => '08.00 - 16.00',
        ];

        // Data kunjungan (global)
        $visits = [
            'today' => 134,
            'month' => 4532,
            'total' => 85433,
        ];

        // Default notif di seluruh halaman
        $notif = null;

        // Kirim ke semua view
        View::composer('*', function ($view) use ($desa, $visits, $notif) {
            $view->with('desa', $desa);
            $view->with('visits', $visits);
            $view->with('notif', $notif);
        });
    }
}
