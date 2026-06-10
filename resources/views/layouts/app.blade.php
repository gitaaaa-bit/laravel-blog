<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand" href="/">Laravel Challenge</a>

        <div class="navbar-nav">
            <a class="nav-link" href="/">Beranda</a>
            <a class="nav-link" href="/tentang">Tentang</a>
            <a class="nav-link" href="/portofolio">Portofolio</a>
            <a class="nav-link" href="/blog">Blog</a>
            <a class="nav-link" href="/kontak">Kontak</a>
        </div>

    </div>
</nav>

<div class="container my-5">
    @yield('content')
</div>

<footer class="bg-dark text-white text-center p-3">
    Copyright © 2026
</footer>

@stack('scripts')

</body>
</html>