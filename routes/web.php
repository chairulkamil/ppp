<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MajalahController;
use App\Http\Controllers\PPPController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PublikasiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
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
// Route::get('/', function () {
//     return view('home');
// });
Route::get('/profil', function () {
    return view('profil');
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
// Route::get('/majalah', function () {
//     return view('majalah.index');
// });

// publikasi majalah
Route::get('/publikasi-majalah', [PublikasiController::class, 'majalah']);

Route::get('/majalah-upload', [MajalahController::class, 'upload']);
Route::post('/upload/proses', [MajalahController::class, 'proses_upload']);

// publikasi majalah
Route::get('/publikasi-ppp', [PublikasiController::class, 'ppp']);

Route::get('/ppp-upload', [PPPController::class, 'upload']);
Route::post('/upload/proses-ppp', [PPPController::class, 'proses_upload']);

// publikasi majalah
Route::get('/publikasi-newsletter', [PublikasiController::class, 'newsletter']);

Route::get('/newsletter-upload', [NewsletterController::class, 'upload']);
Route::post('/upload/proses-newsletter', [NewsletterController::class, 'proses_upload']);


Route::get('/', [HomeController::class, 'index']);

Route::get('contact-us', [ContactController::class, 'contact']);

Route::post('send-message', [ContactController::class, 'sendEmail'])->name('contact.send');

