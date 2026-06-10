<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/tentang', function () {
    return view('pages.tentang');
});

Route::get('/portofolio', function () {

    $projects = [
        ['title' => 'Website Sekolah'],
        ['title' => 'Aplikasi Kasir'],
        ['title' => 'Sistem Akademik'],
        ['title' => 'E-Commerce'],
        ['title' => 'Website Company Profile'],
        ['title' => 'Aplikasi Perpustakaan']
    ];

    return view('pages.portofolio', compact('projects'));
});

Route::get('/blog', function () {

    $articles = [
        'Belajar Laravel untuk Pemula',
        'Mengenal Blade Template',
        'Cara Menggunakan Route',
        'Tutorial Bootstrap',
        'Tips Menjadi Web Developer'
    ];

    return view('pages.blog', compact('articles'));
});

Route::get('/kontak', function () {
    return view('pages.kontak');
});