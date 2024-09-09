<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Home', function () {
    return view('home');
});

Route::get('/Profil', function () {
    return view('profilOwen');
});

Route::get('/MataKuliah', function () {
    return view('matakuliah');
});
