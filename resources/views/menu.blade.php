
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Aura Coffee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #FFF5FA;
            font-family: Arial, sans-serif;
        }
        .navbar, footer {
            background: #F8AFCB;
            color: white;
        }
        .navbar-brand, .nav-link {
            color: white !important;
            font-weight: bold;
        }
        .title {
            color: #E26D9F;
            font-weight: bold;
        }
        .card {
            border: none;
            border-radius: 20px;
            transition: .3s;
            overflow: hidden;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,.15);
        }
        .menu-image {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 14px;
            background: #FFE4EF;
        }
        .price {
            color: #E26D9F;
            font-weight: bold;
        }
        .btn-pink, .btn-add {
            background: #F8AFCB;
            color: white;
            border: none;
            border-radius: 15px;
        }
        .btn-pink:hover, .btn-add:hover {
            background: #E26D9F;
            color: white;
        }
        .btn-add {
            padding: 10px 20px;
        }
        .filter-btn {
            border-radius: 20px;
            padding: 9px 20px;
        }
        footer {
            padding: 20px;
            margin-top: 50px;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        @if(auth()->check() && auth()->user()->role === 'admin')
            <a class="navbar-brand" href="/dashboard">☕ Aura Coffee Admin</a>
        @else
            <a class="navbar-brand" href="/home">☕ Aura Coffee</a>
        @endif

        <div class="navbar-nav ms-auto">
            @if(auth()->check() && auth()->user()->role === 'admin')
                <a class="nav-link" href="/dashboard">Dashboard</a>
            @else
                <a class="nav-link" href="/home">Home</a>
            @endif
            <a class="nav-link" href="/menu">Menu</a>
            <a class="nav-link" href="/about">About</a>
            <a class="nav-link" href="/contact">Contact</a>

            @auth
                <form action="/logout" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="nav-link border-0 bg-transparent">
                        Logout
                    </button>
                </form>
            @endauth
        </div>
    </div>
</nav>

<div class="container py-5">

    <h1 class="text-center title mb-4">🌸 Our Coffee Menu 🌸</h1>

    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(auth()->check() && auth()->user()->role === 'admin')
        <div class="text-end mb-4">
            <a href="{{ route('menu.create') }}" class="btn btn-add">
                ➕ Tambah Menu
            </a>
        </div>
    @endif

    <!-- PENCARIAN MENU -->
    <form action="{{ url('/menu') }}" method="GET" class="mb-3">
        @if(!empty($kategori))
            <input type="hidden" name="kategori" value="{{ $kategori }}">
        @endif

        <div class="input-group">
            <input
                type="text"
                name="cari"
                class="form-control"
                placeholder="🔍 Cari nama menu..."
                value="{{ $cari ?? '' }}">

            <button type="submit" class="btn btn-pink">Cari</button>
            <a href="{{ url('/menu') }}" class="btn btn-outline-secondary">Reset</a>
        </div>
    </form>

    <!-- FILTER KATEGORI -->
    <div class="d-flex justify-content-center flex-wrap gap-2 mb-4">
        <a href="{{ url('/menu') }}{{ !empty($cari) ? '?cari=' . urlencode($cari) : '' }}"
           class="btn filter-btn {{ empty($kategori) ? 'btn-pink' : 'btn-outline-secondary' }}">
            🌸 Semua Menu
        </a>

        <a href="{{ url('/menu') }}?kategori=Makanan{{ !empty($cari) ? '&cari=' . urlencode($cari) : '' }}"
           class="btn filter-btn {{ ($kategori ?? '') === 'Makanan' ? 'btn-pink' : 'btn-outline-secondary' }}">
            🍰 Makanan
        </a>

        <a href="{{ url('/menu') }}?kategori=Minuman{{ !empty($cari) ? '&cari=' . urlencode($cari) : '' }}"
           class="btn filter-btn {{ ($kategori ?? '') === 'Minuman' ? 'btn-pink' : 'btn-outline-secondary' }}">
            ☕ Minuman
        </a>
    </div>

    <!-- DAFTAR MENU -->
    <div class="row g-4">

        @forelse($menus as $menu)
            <div class="col-md-4">
                <div class="card shadow p-3 text-center h-100">

                    @php
                        $gambarTersedia = $menu->gambar
                            && file_exists(storage_path('app/public/' . $menu->gambar));
                        $gambarMenu = $gambarTersedia
                            ? asset('storage/' . $menu->gambar)
                            : asset('images/default-coffee.png');
                    @endphp

                    @if($gambarTersedia)
                        <img
                            src="{{ $gambarMenu }}"
                            class="menu-image"
                            alt="Foto {{ $menu->nama_menu }}"
                            onerror="this.onerror=null;this.style.display='none';this.nextElementSibling.style.display='flex';">

                        <div class="menu-image align-items-center justify-content-center flex-column"
                             style="display:none;background:#FFE4EF;">
                            <span style="font-size:60px;">☕</span>
                            <span style="color:#E26D9F;">Aura Coffee</span>
                        </div>
                    @else
                        <div class="menu-image d-flex align-items-center justify-content-center flex-column"
                             style="background:#FFE4EF;">
                            <span style="font-size:60px;">☕</span>
                            <span style="color:#E26D9F;">Aura Coffee</span>
                        </div>
                    @endif

                    <h3 class="mt-3">{{ $menu->nama_menu }}</h3>

                    <div class="mb-2">
                        @if($menu->kategori === 'Makanan')
                            <span class="badge rounded-pill text-bg-warning">🍰 Makanan</span>
                        @else
                            <span class="badge rounded-pill" style="background:#F8AFCB;color:white;">
                                ☕ Minuman
                            </span>
                        @endif
                    </div>

                    <p>{{ $menu->deskripsi }}</p>

                    <h5 class="price">
                        Rp{{ number_format($menu->harga, 0, ',', '.') }}
                    </h5>

                    <div class="d-flex justify-content-center flex-wrap gap-2 mt-3">
                        @if(auth()->check() && auth()->user()->role === 'admin')
                            <a href="{{ route('menu.edit', $menu->id) }}"
                               class="btn btn-warning btn-sm">✏️ Edit</a>

                            <form action="{{ route('menu.destroy', $menu->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus menu ini?')">
                                    🗑️ Hapus
                                </button>
                            </form>
                        @endif

                        <button type="button" class="btn btn-pink btn-sm"
                            onclick="alert('Pesanan {{ $menu->nama_menu }} berhasil dibuat! 💗')">
                            🛒 Beli
                        </button>
                    </div>
                </div>
            </div>

        @empty
            <div class="col-12 text-center py-4">
                <h4 class="title">
                    @if(($kategori ?? '') === 'Makanan')
                        Belum ada menu makanan 🍰
                    @elseif(($kategori ?? '') === 'Minuman')
                        Belum ada menu minuman ☕
                    @elseif(!empty($cari))
                        Menu tidak ditemukan 🔍
                    @else
                        Belum ada menu ☕
                    @endif
                </h4>
                <p>Coba pilih kategori lain atau cari menu yang berbeda ya! 💗</p>
            </div>
        @endforelse

    </div>
</div>

<footer class="text-center">
    <h4>☕ Aura Coffee</h4>
    <p>Made with 💗 using Laravel</p>
    <p>© 2026 Aura Coffee</p>
</footer>

</body>
</html>
