<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.admin.index');
});

Route::get('/jenisobat', function () {
    return view('pages.admin.jenisobat.index',[
        'title' => 'jenisobat'
    ]);
});

Route::get('/obat', function () {
    return view('pages.admin.obat.index', [
        'title' => 'obat'
    ]);
});

Route::get('/stock', function () {
    return view('pages.admin.stock.index', [
        'title' => 'stock'
    ]);
});

Route::get('/addobat', function () {
    return view('pages.admin.obat.create', [
        'title' => 'obat'
    ]);
});
