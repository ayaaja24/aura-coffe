<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Aura Coffee</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #FFEAF4;
        }

        .card {
            border: none;
            border-radius: 25px;
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

        h2 {
            color: #E26D9F;
            font-weight: bold;
        }

        .switch {
            color: #E26D9F;
            cursor: pointer;
            font-weight: bold;
        }

        #registerForm {
            display: none;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="row vh-100 justify-content-center align-items-center">

        <div class="col-md-5">

            <div class="card shadow-lg p-4">

                <h2 class="text-center mb-4">
                    ☕ Aura Coffee
                </h2>

                @if($errors->any())
                    <div class="alert alert-danger">
                        {{ $errors->first() }}
                    </div>
                @endif


                {{-- ================= LOGIN ================= --}}

                <div id="loginForm">

                    <h4 class="text-center mb-4">
                        Login
                    </h4>

                    <form action="/login" method="POST">

                        @csrf

                        <label class="mb-2">
                            Email
                        </label>

                        <input
                            type="email"
                            name="email"
                            class="form-control mb-3"
                            placeholder="Masukkan Email"
                            required>

                        <label class="mb-2">
                            Password
                        </label>

                        <input
                            type="password"
                            name="password"
                            class="form-control mb-4"
                            placeholder="Masukkan Password"
                            required>

                        <button
                            type="submit"
                            class="btn btn-pink w-100">
                            Login
                        </button>

                    </form>

                    <p class="text-center mt-3">
                        Belum punya akun?
                        <span class="switch" onclick="showRegister()">
                            Register
                        </span>
                    </p>

                </div>


                {{-- ================= REGISTER ================= --}}

                <div id="registerForm">

                    <h4 class="text-center mb-4">
                        Register
                    </h4>

                    <form action="/register" method="POST">

                        @csrf

                        <label class="mb-2">
                            Nama
                        </label>

                        <input
                            type="text"
                            name="name"
                            class="form-control mb-3"
                            placeholder="Masukkan Nama"
                            required>

                        <label class="mb-2">
                            Email
                        </label>

                        <input
                            type="email"
                            name="email"
                            class="form-control mb-3"
                            placeholder="Masukkan Email"
                            required>

                        <label class="mb-2">
                            Password
                        </label>

                        <input
                            type="password"
                            name="password"
                            class="form-control mb-3"
                            placeholder="Minimal 6 karakter"
                            required>

                        <label class="mb-2">
                            Konfirmasi Password
                        </label>

                        <input
                            type="password"
                            name="password_confirmation"
                            class="form-control mb-4"
                            placeholder="Ulangi Password"
                            required>

                        <button
                            type="submit"
                            class="btn btn-pink w-100">
                            Register
                        </button>

                    </form>

                    <p class="text-center mt-3">
                        Sudah punya akun?
                        <span class="switch" onclick="showLogin()">
                            Login
                        </span>
                    </p>

                </div>

            </div>

        </div>

    </div>

</div>


<script>

function showRegister() {

    document.getElementById("loginForm").style.display = "none";

    document.getElementById("registerForm").style.display = "block";

}

function showLogin() {

    document.getElementById("registerForm").style.display = "none";

    document.getElementById("loginForm").style.display = "block";

}

</script>

</body>
</html>