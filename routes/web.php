<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

Route::get('/', function () {
    return view('depan');
});


Route::post('/barang', [BarangController::class, 'store']);

