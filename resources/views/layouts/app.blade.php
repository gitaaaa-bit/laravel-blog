<!DOCTYPE html>
<html lang="id" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand" href="/">Laravel Challenge</a>
        <button id="themeToggle" class="btn btn-outline-light">
    🌙 Dark Mode
</button>

        <div class="navbar-nav">
            <a class="nav-link" href="/">Beranda</a>
            <a class="nav-link" href="/tentang">Tentang</a>
            <a class="nav-link" href="/portofolio">Portofolio</a>
            <a class="nav-link" href="/blog">Blog</a>
            <a class="nav-link" href="/kontak">Kontak</a>
            <a class="nav-link" href="/components">
    Components
</a>
            
        </div>

    </div>
</nav>

<div class="container my-5">
    @yield('content')
</div>

<footer class="bg-dark text-white text-center p-3">
    Copyright © 2026
</footer>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const toggleBtn = document.getElementById('themeToggle');

    if (!toggleBtn) return;

    const currentTheme = localStorage.getItem('theme') || 'light';

    document.documentElement.setAttribute('data-bs-theme', currentTheme);

    updateButtonText(currentTheme);

    toggleBtn.addEventListener('click', function () {

        let theme = document.documentElement.getAttribute('data-bs-theme');

        theme = theme === 'light' ? 'dark' : 'light';

        document.documentElement.setAttribute('data-bs-theme', theme);

        localStorage.setItem('theme', theme);

        updateButtonText(theme);

    });

    function updateButtonText(theme) {
        toggleBtn.textContent =
            theme === 'dark'
                ? '☀️ Light Mode'
                : '🌙 Dark Mode';
    }

});
</script>

@stack('scripts')

</body>
</html>