<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = 'Eric';
    return view('welcome', ['nome' => $nome]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produto', function () {
    return view('products');
});