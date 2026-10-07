@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')
    <h2>Konfirmasi Laporan</h2>

    <!-- Menggunakan Component Alert -->
    <x-alert type="success" message="Laporan banjir berhasil dikirim!" />

    <div class="card">
        <h3>Detail Laporan Anda:</h3>
        <p><strong>Nama Pelapor:</strong> {{ $dataLaporan['nama_pelapor'] }}</p>
        <p><strong>Lokasi:</strong> {{ $dataLaporan['lokasi'] }}</p>
        <p><strong>Tinggi Genangan Air:</strong> {{ $dataLaporan['tinggi_air'] }} cm</p>
    </div>

    <a href="{{ route('banjir.index') }}" class="btn" style="text-decoration: none; display: inline-block;">Lihat Semua Laporan</a>
@endsection