<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Menu - Aura Coffee</title>

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

        .form-control:focus {
            border-color: #F8AFCB;
            box-shadow: 0 0 0 0.2rem rgba(248, 175, 203, 0.25);
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

        .btn-back:hover {
            background: #F8D6E4;
            color: #D95B91;
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

    <!-- NAVBAR -->
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


    <!-- FORM TAMBAH MENU -->
    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-md-7">

                <div class="form-card">

                    <h1 class="text-center title mb-4">
                        🌸 Tambah Menu 🌸
                    </h1>


                    <!-- TAMPILKAN ERROR -->
                    @if ($errors->any())

                        <div class="alert alert-danger">

                            <ul class="mb-0">

                                @foreach ($errors->all() as $error)

                                    <li>{{ $error }}</li>

                                @endforeach

                            </ul>

                        </div>

                    @endif


                    <!-- FORM -->
                    <form action="/menu" method="POST" enctype="multipart/form-data">

                        @csrf


                        <!-- NAMA MENU -->
                        <div class="mb-3">

                            <label class="form-label">
                                Nama Menu
                            </label>

                            <input
                                type="text"
                                name="nama_menu"
                                class="form-control"
                                placeholder="Contoh: Strawberry Latte"
                                value="{{ old('nama_menu') }}"
                                required>

                        </div>

<!-- KATEGORI MENU -->
<div class="mb-3">
    <label class="form-label">Kategori Menu</label>

    <select name="kategori" class="form-control" required>
        <option value="">-- Pilih Kategori --</option>
        <option value="Makanan">🍰 Makanan</option>
        <option value="Minuman">☕ Minuman</option>
    </select>
</div>

                        <!-- HARGA -->
                        <div class="mb-3">

                            <label class="form-label">
                                Harga
                            </label>

                            <input
                                type="number"
                                name="harga"
                                class="form-control"
                                placeholder="Contoh: 25000"
                                value="{{ old('harga') }}"
                                required>

                        </div>


                        <!-- GAMBAR -->
                        <div class="mb-3">

                            <label class="form-label">
                                Pilih Gambar Menu
                            </label>

                            <input
                                type="file"
                                name="gambar"
                                class="form-control"
                                accept="image/*">

                            <small class="text-muted">
                                Pilih gambar dari laptop kamu 🖼️
                            </small>

                        </div>


                        <!-- DESKRIPSI -->
                        <div class="mb-4">

                            <label class="form-label">
                                Deskripsi
                            </label>

                            <textarea
                                name="deskripsi"
                                class="form-control"
                                rows="4"
                                placeholder="Masukkan deskripsi menu">{{ old('deskripsi') }}</textarea>

                        </div>


                        <!-- TOMBOL -->
                        <div class="d-flex justify-content-between">

                            <a href="/menu" class="btn btn-back">

                                ← Kembali

                            </a>


                            <button type="submit" class="btn btn-pink">

                                💗 Simpan Menu

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>


    <!-- FOOTER -->
    <footer class="text-center">

        <h4>☕ Aura Coffee</h4>

        <p>
            Made with 💗 using Laravel
        </p>

        <p>
            © 2026 Aura Coffee
        </p>

    </footer>

</body>
</html>