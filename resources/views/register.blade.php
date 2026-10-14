<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register - Aura Coffee</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #FFEAF4;
        }

        .card {
            border: none;
            border-radius: 25px;
        }

        h2 {
            color: #E26D9F;
            font-weight: bold;
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

        input {
            border-radius: 15px !important;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="row vh-100 justify-content-center align-items-center">

        <div class="col-md-5">

            <div class="card shadow-lg p-4">

                <h2 class="text-center mb-4">
                    🌸 Register Aura Coffee
                </h2>

                @if($errors->any())
                    <div class="alert alert-danger">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form action="/register" method="POST">

                    @csrf

                    <label class="mb-2">Nama</label>

                    <input
                        type="text"
                        name="name"
                        class="form-control mb-3"
                        placeholder="Masukkan nama"
                        required>

                    <label class="mb-2">Email</label>

                    <input
                        type="email"
                        name="email"
                        class="form-control mb-3"
                        placeholder="Masukkan email"
                        required>

                    <label class="mb-2">Password</label>

                    <input
                        type="password"
                        name="password"
                        class="form-control mb-3"
                        placeholder="Masukkan password"
                        required>

                    <label class="mb-2">Konfirmasi Password</label>

                    <input
                        type="password"
                        name="password_confirmation"
                        class="form-control mb-4"
                        placeholder="Ulangi password"
                        required>

                    <button type="submit" class="btn btn-pink w-100">
                        💗 Daftar
                    </button>

                </form>

                <p class="text-center mt-3 mb-0">
                    Sudah punya akun?
                    <a href="/" style="color:#E26D9F;">
                        Login
                    </a>
                </p>

            </div>

        </div>

    </div>

</div>

</body>
</html>