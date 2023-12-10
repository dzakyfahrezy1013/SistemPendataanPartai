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

/* ----- ROUTE USER ------- */
Route::get('/dashboard', function () {
    return view('user.index');
});
Route::get('/userprofile', function () {
    return view('user.profile');
});
