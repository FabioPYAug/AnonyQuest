<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "teste";
});

Route::get('/teste', function () {
    return "<h1>Titulo até que relativamente grandinhozinho</h1>";
});