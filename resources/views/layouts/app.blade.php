<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | LaporBanjir BPBD Kab. Bandung</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f9f9f9; }
        header, footer { background: #0056b3; color: white; padding: 15px; text-align: center; border-radius: 6px; }
        nav { margin-top: 10px; }
        nav a { margin: 0 10px; text-decoration: none; color: white; font-weight: bold; }
        nav a:hover { text-decoration: underline; }
        .container { max-width: 800px; margin: 0 auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        .card { border: 1px solid #ddd; padding: 15px; margin: 10px 0; border-radius: 6px; background: #fff; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: bold; }
        .form-group input { width: 100%; padding: 8px; box-sizing: border-box; }
        .btn { background: #0056b3; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>LaporBanjir - BPBD Kab. Bandung</h1>
            <nav>
                <a href="{{ route('banjir.index') }}">Daftar Laporan</a>
                <a href="{{ route('banjir.form') }}">Buat Laporan</a>
            </nav>
        </header>

        <main style="padding: 20px 0;">
            @yield('content')
        </main>

        <footer>
            <p>&copy; 2026 BPBD Kabupaten Bandung - LaporBanjir</p>
        </footer>
    </div>
</body>
</html>