<?php

//use Illuminate\Support\Facades\Route;

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

Route::get('/fakultas', function () {
    $fakultas = [
        ['kode' => 'FRI', 'nama_fakultas' => 'Fakultas Rekayasa Industri'],
        ['kode' => 'FTE', 'nama_fakultas' => 'Fakultas Teknik Elektro'],
        ['kode' => 'FIF', 'nama_fakultas' => 'Fakultas Informatika'],
        ['kode' => 'FEB', 'nama_fakultas' => 'Fakultas Ekonomi dan Bisnis'],
        ['kode' => 'FIK', 'nama_fakultas' => 'Fakultas Industri Kreatif'],
        ['kode' => 'FIT', 'nama_fakultas' => 'Fakultas Ilmu Terapan'],
    ];
        return view('fakultas', ['fakultas' => $fakultas]);
});
