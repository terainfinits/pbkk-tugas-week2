@extends('layouts.app')

@section('title', 'Riwayat Studi')

@section('content')

    <div class="max-w-2xl mx-auto py-12 px-6">
        <h1 class="text-3xl font-bold text-white mb-2 text-center">Riwayat Studi</h1>

        <div class="text-center mb-8">
            <p class="text-white font-semibold">{{ $nama }}</p>
            <p class="text-gray-500 font-mono text-sm">{{ $nrp }}</p>
        </div>

        <div class="p-8 bg-gray-950 rounded-2xl border border-gray-800 flex flex-col items-center">
            <table class="border-collapse text-center">
                <thead>
                    <tr>
                        <th class="border border-gray-700 px-6 py-3 text-white bg-gray-900">Semester</th>
                        <th class="border border-gray-700 px-6 py-3 text-white bg-gray-900">IP</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($riwayat as $r)
                        <tr>
                            <td class="border border-gray-700 px-6 py-3 text-gray-300">{{ $r['semester'] }}</td>
                            <td class="border border-gray-700 px-6 py-3 text-gray-300">{{ $r['ip'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="text-center mt-10">
            <a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition">← Kembali ke Home</a>
        </div>
    </div>

@endsection