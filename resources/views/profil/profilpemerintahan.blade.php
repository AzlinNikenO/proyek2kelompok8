@extends('layouts.app')
@section('content')

<div class="container mx-auto py-10">
    <h2 class="text-center text-3xl font-bold mb-2">Profil Pemerintahan Desa Duko</h2>
    <p class="text-center text-gray-600 mb-10">Struktur kelengkapan pemerintahan desa yang berkomitmen melayani masyarakat dengan amanah dan profesional</p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @php
            $struktur = [
                ['img' => 'https://i.pravatar.cc/120?img=5', 'jabatan' => 'Kepala Desa', 'nama' => 'Budi Santoso, S.Sos', 'periode' => '2019–2025'],
                ['img' => 'https://i.pravatar.cc/120?img=32', 'jabatan' => 'Sekretaris Desa', 'nama' => 'Siti Nurhaliza, S.AP', 'periode' => '2020–2026'],
                ['img' => 'https://i.pravatar.cc/120?img=12', 'jabatan' => 'Kepala Urusan Pemerintahan', 'nama' => 'Ahmad Hidayat, S.H', 'periode' => '2020–2026'],
                ['img' => 'https://i.pravatar.cc/120?img=50', 'jabatan' => 'Kepala Urusan Pembangunan', 'nama' => 'Rina Wijayanti, S.T', 'periode' => '2021–2027'],
                ['img' => 'https://i.pravatar.cc/120?img=20', 'jabatan' => 'Kepala Urusan Kesejahteraan', 'nama' => 'Dedi Supriadi, S.Sos', 'periode' => '2020–2026'],
            ];
        @endphp

        @foreach($struktur as $s)
        <div class="bg-white shadow-md rounded-xl p-5 text-center transition hover:-translate-y-1 hover:shadow-lg">
            <img src="{{ $s['img'] }}" class="w-28 h-28 rounded-full mx-auto mb-4 object-cover">
            <h3 class="font-semibold text-lg">{{ $s['jabatan'] }}</h3>
            <p class="text-gray-700">{{ $s['nama'] }}</p>
            <span class="text-sm text-gray-500">{{ $s['periode'] }}</span>
        </div>
        @endforeach
    </div>
</div>

@endsection
