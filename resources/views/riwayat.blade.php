@extends('layouts.app')

@section('title', 'Riwayat Studi')

@section('content')

    <div class="section-container--sm">
        <h1 class="text-3xl font-bold text-white mb-2 text-center">Riwayat Studi</h1>

        <div class="text-center mb-8">
            <p class="text-white font-semibold">{{ $nama }}</p>
            <p class="text-gray-500 font-mono text-sm">{{ $nrp }}</p>
        </div>

        <div class="card flex flex-col items-center">
            <table class="border-collapse text-center">
                <thead>
                    <tr>
                        <th class="table-head-cell">Semester</th>
                        <th class="table-head-cell">IP</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($riwayat as $r)
                        <tr>
                            <td class="table-cell">{{ $r['semester'] }}</td>
                            <td class="table-cell">{{ $r['ip'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="text-center mt-10">
            <a href="{{ route('home') }}" class="back-link">← Kembali ke Home</a>
        </div>
    </div>

@endsection