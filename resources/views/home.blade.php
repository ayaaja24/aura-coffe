<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard User - Aura Coffee</title>

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

        .hero {
            padding: 80px 0;
        }

        .hero h1 {
            color: #E26D9F;
            font-weight: bold;
            font-size: 45px;
        }

        .hero p {
            color: #666;
            font-size: 18px;
        }

        .btn-pink {
            background: #F8AFCB;
            color: white;
            border: none;
            border-radius: 15px;
            padding: 12px 25px;
        }

        .btn-pink:hover {
            background: #F48FB1;
            color: white;
        }

        .hero-img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 25px;
        }

        .info-card {
            background: white;
            border: none;
            border-radius: 20px;
            padding: 30px;
            height: 100%;
            box-shadow: 0 8px 20px rgba(226, 109, 159, 0.12);
            transition: .3s;
        }

        .info-card:hover {
            transform: translateY(-5px);
        }

        .info-card h3 {
            color: #E26D9F;
            font-weight: bold;
        }

        footer {
            background: #F8AFCB;
            color: white;
            padding: 25px;
            margin-top: 60px;
        }
    </style>

</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg">

        <div class="container">

            <a class="navbar-brand" href="/home">
                ☕ Aura Coffee
            </a>

            <div class="navbar-nav ms-auto">

                <a class="nav-link" href="/home">
                    Home
                </a>

                <a class="nav-link" href="/menu">
                    Menu
                </a>

                <a class="nav-link" href="/about">
                    About
                </a>

                <a class="nav-link" href="/contact">
                    Contact
                </a>

                <form action="/logout" method="POST" class="d-inline">
                    @csrf

                    <button
                        type="submit"
                        class="nav-link border-0 bg-transparent">
                        Logout
                    </button>
                </form>

            </div>

        </div>

    </nav>


    <!-- DASHBOARD USER / HERO -->
    <div class="container hero">

        <div class="row align-items-center">

            <div class="col-md-6">

                <h1>
                    Welcome to Aura Coffee 🌸
                </h1>

                <p class="lead mt-3">
                    Selamat datang di Dashboard User Aura Coffee.
                </p>

                <p>
                    Nikmati berbagai pilihan kopi dan minuman
                    favoritmu dengan suasana yang nyaman,
                    hangat, dan aesthetic. ☕💗
                </p>

                <a href="/menu" class="btn btn-pink mt-3">
                    ☕ Lihat Menu
                </a>

            </div>


            <div class="col-md-6 mt-4 mt-md-0">

                <img
                    src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=800"
                    class="hero-img shadow"
                    alt="Aura Coffee">

            </div>

        </div>

    </div>


    <!-- KEUNGGULAN -->
    <div class="container py-5">

        <h2
            class="text-center mb-5"
            style="color:#E26D9F; font-weight:bold;">
            🌸 Kenapa Aura Coffee? 🌸
        </h2>

        <div class="row g-4">

            <div class="col-md-4">

                <div class="info-card text-center">

                    <div style="font-size:45px;">
                        ☕
                    </div>

                    <h3 class="mt-3">
                        Kopi Berkualitas
                    </h3>

                    <p>
                        Kami menyediakan kopi dan minuman
                        dengan rasa yang nikmat dan berkualitas.
                    </p>

                </div>

            </div>


            <div class="col-md-4">

                <div class="info-card text-center">

                    <div style="font-size:45px;">
                        💗
                    </div>

                    <h3 class="mt-3">
                        Suasana Nyaman
                    </h3>

                    <p>
                        Tempat yang nyaman untuk nongkrong,
                        belajar, maupun bersantai bersama teman.
                    </p>

                </div>

            </div>


            <div class="col-md-4">

                <div class="info-card text-center">

                    <div style="font-size:45px;">
                        🌸
                    </div>

                    <h3 class="mt-3">
                        Harga Terjangkau
                    </h3>

                    <p>
                        Nikmati berbagai pilihan minuman
                        dengan harga yang ramah di kantong.
                    </p>

                </div>

            </div>

        </div>

    </div>


    <!-- AJAKAN MELIHAT MENU -->
    <div class="container text-center py-5">

        <h2 style="color:#E26D9F; font-weight:bold;">
            Mau lihat menu kami? ☕
        </h2>

        <p>
            Yuk pilih minuman favoritmu sekarang!
        </p>

        <a href="/menu" class="btn btn-pink">
            🌸 Lihat Semua Menu
        </a>

    </div>


    <!-- CUSTOMER REVIEWS -->
    <div class="container py-5">

        <h2
            class="text-center mb-5"
            style="color:#E26D9F; font-weight:bold;">
            Customer Reviews 💗
        </h2>

        <div class="row g-4">

            <div class="col-md-4">

                <div class="info-card text-center">

                    ⭐⭐⭐⭐⭐

                    <p class="mt-3">
                        Tempatnya nyaman dan kopinya enak!
                    </p>

                    <b>- Sinta</b>

                </div>

            </div>


            <div class="col-md-4">

                <div class="info-card text-center">

                    ⭐⭐⭐⭐⭐

                    <p class="mt-3">
                        Pelayanan ramah dan harga terjangkau.
                    </p>

                    <b>- Rani</b>

                </div>

            </div>


            <div class="col-md-4">

                <div class="info-card text-center">

                    ⭐⭐⭐⭐⭐

                    <p class="mt-3">
                        Favorite coffee shop buat nongkrong.
                    </p>

                    <b>- Dimas</b>

                </div>

            </div>

        </div>

    </div>


    <!-- FOOTER -->
    <footer class="text-center">

        <h4>
            ☕ Aura Coffee
        </h4>

        <p>
            Jakarta Utara
        </p>

        <p>
            📞 0812-3456-7890
        </p>

        <p>
            📧 auracoffee@gmail.com
        </p>

        <p>
            Dashboard User Aura Coffee
        </p>

        <p>
            Made with 💗 using Laravel
        </p>

        <p>
            © 2026 Aura Coffee
        </p>

    </footer>

</body>

</html>