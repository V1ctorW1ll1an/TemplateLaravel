<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/bemvindo/{nome}', function (string $nome) {
    return "ola! seja bem vindo {$nome}";
});
