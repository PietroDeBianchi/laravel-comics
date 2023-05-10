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
    //link '$data' to ../confing/db.php
    $data = config('db.data');
    //link '$data' to /resources/home.php
    return view('home', compact('data'));
})->name('home');

Route::get('/characters', function () {
    //link '$data' to ../confing/db.php
    $data = config('db.data');
    //link '$data' to /resources/home.php
    return view('characters', compact('data'));
})->name('characters');

Route::get('/comics', function () {
    //link '$data' to ../confing/db.php
    $data = config('db.data');
    //link '$data' to /resources/home.php
    return view('comics', compact('data'));
})->name('comics');
