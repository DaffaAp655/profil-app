<!DOCTYPE html>
<html lang='id'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>@yield('title', 'Profil App')</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f8fa;
            color: #262626;
        }

        .navbar {
            background: #0B1F3A;
            color: white;
            padding: 16px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .navbar .brand {
            font-weight: bold;
            font-size: 15px;
            letter-spacing: 0.5px;
        }

        .nav-links {
            display: flex;
            gap: 20px;
        }

        .navbar a {
            color: #a2b4c7;
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
            transition: color 0.2s ease, border-bottom 0.2s ease;
            padding-bottom: 4px;
            border-bottom: 2px solid transparent;
        }

        .navbar a:hover {
            color: white;
        }

        .navbar a.active {
            color: #21B0A7;
            border-bottom-color: #21B0A7;
            font-weight: bold;
        }

        .container {
            max-width: 760px;
            margin: 30px auto;
            padding: 0 16px;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: #888;
            font-size: 13px;
        }
    </style>
</head>

<body>
    <nav class='navbar'>
        <span class="brand">Pemrograman Web | UNTIRTA</span>
        <div class="nav-links">
            <a href="{{ route('profil') }}" class="{{ request()->routeIs('profil') ? 'active' : '' }}">Profil</a>
            <a href="{{ route('mahasiswas.index') }}" class="{{ request()->routeIs('mahasiswas.*') ? 'active' : '' }}">Kelola Mahasiswa</a>
            <a href="{{ route('tentang') }}" class="{{ request()->routeIs('tentang') ? 'active' : '' }}">Tentang</a>
        </div>
    </nav>
    <div class='container'>

    {{-- Flash message sukses --}}
    @if(session('success'))
        <div style='background:#dcfce7;color:#166534;
                    border:1px solid #86efac;padding:14px;
                    border-radius:8px;margin-bottom:16px;
                    display:flex;align-items:center;gap:8px;'>
            <span style='font-size:18px;'>✓</span>
            <span>{{ session('success') }}</span>
        </div>
    @endif

    {{-- Flash message error --}}
    @if(session('error'))
        <div style='background:#fee2e2;color:#991b1b;
                    border:1px solid #fca5a5;padding:14px;
                    border-radius:8px;margin-bottom:16px;'>
            ⚠️ {{ session('error') }}
        </div>
    @endif

    @yield('content')
    </div>

    <footer>
        &copy; {{ date('Y') }} | Daffa Adillah Putra
    </footer>
</body>

</html>