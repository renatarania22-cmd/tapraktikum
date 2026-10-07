<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BanjirController extends Controller
{
    // Halaman Daftar Laporan
    public function index()
    {
        // Data dummy laporan banjir
        $laporanList = [
            [
                'nama_pelapor' => 'Ahmad',
                'lokasi' => 'Dayeuhkolot',
                'tinggi_air' => 25 // Waspada
            ],
            [
                'nama_pelapor' => 'Budi',
                'lokasi' => 'Baleendah',
                'tinggi_air' => 50 // Siaga
            ],
            [
                'nama_pelapor' => 'Siti',
                'lokasi' => 'Bojongsoang',
                'tinggi_air' => 85 // Awas
            ]
        ];

        return view('banjir.index', compact('laporanList'));
    }

    // Halaman Form Pelaporan
    public function create()
    {
        return view('banjir.form');
    }

    // Proses Form POST dan Tampilkan Halaman Konfirmasi
    public function store(Request $request)
    {
        $dataLaporan = [
            'nama_pelapor' => $request->input('nama_pelapor'),
            'lokasi' => $request->input('lokasi'),
            'tinggi_air' => $request->input('tinggi_air')
        ];

        return view('banjir.konfirmasi', compact('dataLaporan'));
    }
}