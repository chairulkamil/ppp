<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/master', function () {
    return view('layouts.master');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/kpbu', function () {
    return view('kpbu');
});
Route::get('/apa-itu-kpbu', function () {
    return view('kpbu.apa-itu-kpbu');
});
Route::get('/sektor-kpbu', function () {
    return view('kpbu.sektor-kpbu');
});
Route::get('/kesalahan-umum-kpbu', function () {
    return view('kpbu.kesalahan-umum-kpbu');
});
Route::get('/skema-kpbu', function () {
    return view('kpbu.skema-kpbu');
});
Route::get('/pihak-kpbu', function () {
    return view('kpbu.pihak-kpbu');
});
Route::get('/penerapan-kpbu', function () {
    return view('kpbu.penerapan-kpbu');
});
Route::get('/pengembalian-investasi', function () {
    return view('kpbu.pengembalian-investasi');
});
Route::get('/perbedaan-kpbu', function () {
    return view('kpbu.perbedaan-kpbu');
});
Route::get('/skema-pengembalian', function () {
    return view('kpbu.skema-pengembalian');
});
