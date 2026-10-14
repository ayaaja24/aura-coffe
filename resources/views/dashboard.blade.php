<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Admin - Aura Coffee</title>

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

        .nav-link {
            margin-left: 15px;
        }

        .welcome {
            background: white;
            border-radius: 25px;
            padding: 40px;
            margin-top: 40px;
            box-shadow: 0 10px 25px rgba(0,0,0,.08);
        }

        .title {
            color: #E26D9F;
            font-weight: bold;
        }

        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0,0,0,.08);
            transition: .3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .btn-pink {
            background: #F8AFCB;
            color: white;
            border: none;
            border-radius: 15px;
        }

        .btn-pink:hover {
            background: #F48FB1;
            color: white;
        }

        .btn-outline-pink {
            border: 2px solid #F8AFCB;
            color: #E26D9F;
            border-radius: 15px;
        }

        .btn-outline-pink:hover {
            background: #F8AFCB;
            color: white;
        }

        footer {
            background: #F8AFCB;
            color: white;
            padding: 20px;
            margin-top: 60px;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">

        <a class="navbar-brand" href="/dashboard">
            ☕ Aura Coffee Admin
        </a>

        <div class="navbar-nav ms-auto">

            <a class="nav-link" href="/dashboard">
                Dashboard
            </a>

            <a class="nav-link" href="/menu">
                Kelola Menu
            </a>

            <a class="nav-link" href="/about">
                About
            </a>

            <a class="nav-link" href="/contact">
                Contact
            </a>

            <form action="/logout" method="POST" class="d-inline">
                @csrf
                <button type="submit"
                        class="nav-link border-0 bg-transparent">
                    Logout
                </button>
            </form>

        </div>

    </div>
</nav>


<div class="container">

    <div class="welcome text-center">

        <h1 class="title">
            🌸 Dashboard Admin 🌸
        </h1>

        <p class="mt-3">
            Selamat datang di halaman admin Aura Coffee.
        </p>

        <p>
            Kelola menu dan data Aura Coffee melalui dashboard ini.
        </p>

        <a href="/menu" class="btn btn-pink px-4">
            📋 Kelola Menu
        </a>

    </div>


    <div class="row g-4 mt-4">

        <div class="col-md-4">

            <div class="card p-4 text-center">

                <h2>📋</h2>

                <h4 class="title">
                    Kelola Menu
                </h4>

                <p>
                    Lihat semua menu yang tersedia.
                </p>

                <a href="/menu" class="btn btn-pink">
                    Lihat Menu
                </a>

            </div>

        </div>


        <div class="col-md-4">

            <div class="card p-4 text-center">

                <h2>➕</h2>

                <h4 class="title">
                    Tambah Menu
                </h4>

                <p>
                    Tambahkan menu kopi baru.
                </p>

                <a href="/menu/create" class="btn btn-outline-pink">
                    Tambah Menu
                </a>

            </div>

        </div>


        <div class="col-md-4">

            <div class="card p-4 text-center">

                <h2>✏️</h2>

                <h4 class="title">
                    Edit Menu
                </h4>

                <p>
                    Kelola dan ubah data menu.
                </p>

                <a href="/menu" class="btn btn-outline-pink">
                    Kelola Data
                </a>

            </div>

        </div>

    </div>

</div>


<footer class="text-center">

    <h4>☕ Aura Coffee</h4>

    <p>
        Admin Dashboard
    </p>

    <p>
        © 2026 Aura Coffee
    </p>

</footer>

</body>
</html>