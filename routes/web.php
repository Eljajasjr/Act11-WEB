<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/fotos', function () {
    return view('fotos');
})->name('fotos');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');