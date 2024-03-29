<?php

use App\Http\Controllers\ProfileController;
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
    return view('home');
});

Route::get('/berita', function () {
    return view('blog');
});

Route::get('/berita/test', function () {
    return view('berita');
});

Route::get('/tentang-kami', function () {
    return view('about');
});

Route::get('/kontak', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/admin/berita', function () {
    return view('admin.berita');
});

Route::get('/admin/pengurus', function () {
    return view('admin.team');
});

Route::get('/admin/pesan', function () {
    return view('admin.message');
});