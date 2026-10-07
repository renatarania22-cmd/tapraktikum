@extends('layouts.app')

@section('title', 'Daftar Laporan Banjir')

@section('content')
    <h2>Daftar Kejadian Banjir</h2>

    <x-alert type="success" message="Data laporan banjir wilayah Kabupaten Bandung terbaru." />

    @forelse($laporanList as $laporan)
        @include('partials.laporan-card', ['laporan' => $laporan])
    @empty
        <p>Belum ada laporan banjir saat ini.</p>
    @endforelse
@endsection