@extends('layouts.app')

@section('title', 'Kalkulator IPK')

@section('content')

    <div class="section-container--sm text-center">
        <h1 class="text-3xl font-bold text-white mb-2">Kalkulator Portofolio Akademis</h1>
        <p class="text-gray-500 text-sm mb-8">Rekap nilai IP per semester</p>

        <div class="card text-left space-y-4">
            <div>
                <p class="text-xs uppercase tracking-wider text-gray-500 mb-1">IP Semester 1</p>
                <p class="text-white text-2xl font-bold">{{ $ip1 }}</p>
            </div>
            <hr class="border-gray-800">
            <div>
                <p class="text-xs uppercase tracking-wider text-gray-500 mb-1">IP Semester 2</p>
                <p class="text-white text-2xl font-bold">{{ $ip2 }}</p>
            </div>
            <hr class="border-gray-800">
            <div class="pt-2">
                <p class="text-xs uppercase tracking-wider text-gray-500 mb-1">Total</p>
                <p class="text-white text-lg font-semibold">{{ $jumlah }}</p>
            </div>
            <div>
                <p class="text-xs uppercase tracking-wider text-gray-500 mb-1">Rata-rata (IPK)</p>
                <p class="text-emerald-400 text-3xl font-extrabold">{{ $rata }}</p>
            </div>
        </div>

        <div class="mt-10">
            <a href="{{ route('home') }}" class="back-link">← Kembali ke Home</a>
        </div>
    </div>

@endsection
