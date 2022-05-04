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
    return view('client.app');
})->name('home');

Route::get('/comics', function () {
    $comics = config('comics');
    return view('client.comics', ["comics" => $comics]);
})->name('comics');

Route::get('partials.header', function () {
    $navLinks = config('navbar');
    return view('partials.header', ['navLinks' => $navLinks]);
});

