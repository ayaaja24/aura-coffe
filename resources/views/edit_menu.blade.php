<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Menu - Aura Coffee</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #FFF5FA;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background: #F8AFCB;
        }

        .navbar-brand,
        .nav-link {
            color: white !important;
            font-weight: bold;
        }

        .title {
            color: #E26D9F;
            font-weight: bold;
        }

        .form-card {
            background: white;
            border-radius: 25px;
            padding: 35px;
            box-shadow: 0 8px 25px rgba(226, 109, 159, 0.15);
        }

        .form-label {
            color: #D95B91;
            font-weight: bold;
        }

        .form-control {
            border: 2px solid #F8D6E4;
            border-radius: 15px;
            padding: 12px;
        }

        .btn-pink {
            background: #F8AFCB;
            color: white;
            border: none;
            border-radius: 15px;
            padding: 10px 25px;
        }

        .btn-pink:hover {
            background: #F48FB1;
            color: white;
        }

        .btn-back {
            background: #FFF0F6;
            color: #D95B91;
            border: none;
            border-radius: 15px;
            padding: 10px 25px;
        }

        footer {
            background: #F8AFCB;
            color: white;
            padding: 20px;
            margin-top: 50px;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/dashboard">
            ☕ Aura Coffee
        </a>

        <div class="navbar-nav ms-auto">
            <a class="nav-link" href="/home">Home</a>
            <a class="nav-link" href="/menu">Menu</a>
            <a class="nav-link" href="/about">About</a>
            <a class="nav-link" href="/contact">Contact</a>
        </div>
    </div>
</nav>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-7">

            <div class="form-card">

                <h1 class="text-center title mb-4">
                    ✏️ Edit Menu
                </h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('menu.update', $menu->id) }}"
                      method="POST"
                      enctype="multipart/form-data">

                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Nama Menu</label>
                        <input
                            type="text"
                            name="nama_menu"
                            class="form-control"
                            value="{{ old('nama_menu', $menu->nama_menu) }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input
                            type="number"
                            name="harga"
                            class="form-control"
                            value="{{ old('harga', $menu->harga) }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Gambar Saat Ini</label>

                        @if($menu->gambar)
                            <img
                                src="{{ asset('storage/' . $menu->gambar) }}"
                                class="img-fluid rounded mb-3"
                                style="max-height: 200px;">
                        @else
                            <p>Belum ada gambar ☕</p>
                        @endif

                        <input
                            type="file"
                            name="gambar"
                            class="form-control"
                            accept="image/*">

                        <small class="text-muted">
                            Kosongkan jika tidak ingin mengganti gambar.
                        </small>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Deskripsi</label>

                        <textarea
                            name="deskripsi"
                            class="form-control"
                            rows="4">{{ old('deskripsi', $menu->deskripsi) }}</textarea>
                    </div>

                    <div class="d-flex justify-content-between">

                        <a href="/menu" class="btn btn-back">
                            ← Kembali
                        </a>

                        <button type="submit" class="btn btn-pink">
                            💗 Update Menu
                        </button>

                    </div>

                </form>

            </div>

        </div>
    </div>
</div>

<footer class="text-center">
    <h4>☕ Aura Coffee</h4>
    <p>Made with 💗 using Laravel</p>
    <p>© 2026 Aura Coffee</p>
</footer>

</body>
</html>