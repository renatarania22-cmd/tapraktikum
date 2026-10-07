<div class="card">
    <h3>Lokasi: {{ $laporan['lokasi'] }}</h3>
    <p><strong>Pelapor:</strong> {{ $laporan['nama_pelapor'] }}</p>
    <p><strong>Tinggi Genangan:</strong> {{ $laporan['tinggi_air'] }} cm</p>

    <!-- Logika Status Genangan sesuai Modul -->
    <p><strong>Status:</strong> 
        @if($laporan['tinggi_air'] < 30)
            <span style="color: blue; font-weight: bold;">Waspada</span>
        @elseif($laporan['tinggi_air'] >= 30 && $laporan['tinggi_air'] <= 70)
            <span style="color: orange; font-weight: bold;">Siaga</span>
        @else
            <span style="color: red; font-weight: bold;">Awas</span>
        @endif
    </p>
</div>