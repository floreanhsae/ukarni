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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard/info-lowongan', function () {
    return view('info-lowongan');
});

Route::get('/dashboard/info-lowongan-add', function () {
    return view('add-info-lowongan');
});

Route::get('/dashboard/info-lowongan-edit', function () {
    return view('edit-info-lowongan');
});

Route::get('/dashboard/info-lowongan-add-perusahaan', function () {
    return view('add-perusahaan-info-lowongan');
});

Route::get('/dashboard/rekrutmen', function () {
    return view('rekrutmen');
});

Route::get('/dashboard/rekrutmen-add', function () {
    return view('add-rekrutmen');
});

Route::get('/dashboard/rekrutmen-edit', function () {
    return view('edit-rekrutmen');
});

Route::get('/dashboard/rekrutmen-list-peserta', function () {
    return view('list-peserta-rekrutmen');
});

Route::get('/dashboard/rekrutmen-list-posisi', function () {
    return view('list-posisi-rekrutmen');
});

Route::get('/dashboard/rekrutmen-list-posisi-add', function () {
    return view('add-list-posisi-rekrutmen');
});

Route::get('/dashboard/rekrutmen-list-posisi-edit', function () {
    return view('edit-list-posisi-rekrutmen');
});

Route::get('/dashboard/rekrutmen-list-data', function () {
    return view('list-data-rekrutmen');
});

Route::get('/dashboard/rekrutmen-list-data-add', function () {
    return view('add-list-data-rekrutmen');
});

Route::get('/dashboard/rekrutmen-list-data-edit', function () {
    return view('edit-list-data-rekrutmen');
});

Route::get('/dashboard/agenda', function () {
    return view('agenda');
});

Route::get('/dashboard/agenda-add', function () {
    return view('add-agenda');
});

Route::get('/dashboard/agenda-edit', function () {
    return view('edit-agenda');
});

Route::get('/dashboard/perusahaan', function () {
    return view('perusahaan');
});

Route::get('/dashboard/perusahaan-add', function () {
    return view('add-perusahaan');
});

Route::get('/dashboard/perusahaan-edit', function () {
    return view('edit-perusahaan');
});

Route::get('/dashboard/user', function () {
    return view('user');
});

Route::get('/dashboard/user-add', function () {
    return view('add-user');
});

Route::get('/dashboard/user-edit', function () {
    return view('edit-user');
});

Route::get('/dashboard/other', function () {
    return view('other');
});