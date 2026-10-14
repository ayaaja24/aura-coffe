<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Contact - Aura Coffee</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#FFF5FA;
    font-family:Arial,sans-serif;
}

.navbar{
    background:#F8AFCB;
}

.navbar-brand,.nav-link{
    color:white !important;
    font-weight:bold;
}

.card{
    border:none;
    border-radius:20px;
}

.btn-pink{
    background:#F8AFCB;
    color:white;
    font-weight:bold;
}

.btn-pink:hover{
    background:#F48FB1;
    color:white;
}

footer{
    background:#F8AFCB;
    color:white;
    padding:20px;
    margin-top:40px;
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
<a class="nav-link" href="/about">About</a>
<a class="nav-link" href="/contact">Contact</a>
<a class="nav-link" href="/">Logout</a>

</div>

</div>

</nav>

<div class="container py-5">

<h1 class="text-center mb-5" style="color:#E26D9F;">
Contact Us 💗
</h1>

<div class="row">

<div class="col-md-6">

<div class="card shadow p-4">

<h3 style="color:#E26D9F;">
Send Message
</h3>

<input type="text" class="form-control mb-3" placeholder="Your Name">

<input type="email" class="form-control mb-3" placeholder="Email">

<textarea class="form-control mb-3" rows="5" placeholder="Message"></textarea>

<button class="btn btn-pink" onclick="kirimPesan()">
    Send Message
</button>

</div>

</div>

<div class="col-md-6">

<div class="card shadow p-4">

<h3 style="color:#E26D9F;">
Our Information
</h3>

<p>📍 Jakarta Utara</p>

<p>📞 0812-3456-7890</p>

<p>📧 auracoffee@gmail.com</p>

<p>🕘 Senin - Minggu</p>

<p>08.00 - 22.00 WIB</p>

<p>📷 Instagram : @auracoffee</p>

</div>

</div>

</div>

</div>

<footer class="text-center">

<h4>☕ Aura Coffee</h4>

<p>Made with 💗 using Laravel</p>

<p>© 2026 Aura Coffee</p>

</footer>
<script>
function kirimPesan() {

    alert("✅ Pesan berhasil dikirim!");

}
</script>
</body>
</html>