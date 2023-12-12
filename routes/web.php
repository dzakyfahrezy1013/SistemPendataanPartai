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

/* -------- ROUTE LANDING PAGE ----- */

Route::get('/', function () {
    return view('landingpage.index');
});
Route::get('/home', function () {
    return view('landingpage.index');
});
Route::get('/programkerja', function () {
    return view('landingpage.proker');
});
Route::get('/visimisi', function () {
    return view('landingpage.visimisi');
});
Route::get('/kegiatan', function () {
    return view('landingpage.kegiatan');
});

/* -------- ROUTE USER ----- */
Route::get('/login', function () {
    return view('user.login');
});
Route::get('/dashboard', function () {
    return view('user.index');
});
Route::get('/userprofile', function () {
    return view('user.profile');
});
Route::get('/inputanggota', function () {
    return view('user.inputanggota');
});
Route::get('/kelolaanggota', function () {
    return view('user.kelolaanggota');
});
