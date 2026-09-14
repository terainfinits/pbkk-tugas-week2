@extends('layouts.app')

@section('title', 'Kalkulator IPK')

@section('content')
    <h1>Kalkulator Portofolio Akademis</h1>
    <p>IP Semester 1: {{ $ip1 }}</p>
    <p>IP Semester 2: {{ $ip2 }}</p>
    <p><strong>Jumlah:</strong> {{ $jumlah }}</p>
    <p><strong>Rata-rata:</strong> {{ $rata }}</p>
@endsection
