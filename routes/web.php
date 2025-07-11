<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = 'Eric';
    $arr = [1,2,3,4,5];

    return view('welcome', [
        'nome' => $nome,
        'arr' => $arr,
    ]);
    
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produto', function () {
    return view('products');
});