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
    $navLinks = config('navbar');
    $footerLinks = config('footerNav');
    return view('client.app', [
        "navLinks" => $navLinks,
        "footerLinks" => $footerLinks
    ]);
})->name('home');

Route::get('/comics', function () {
    $comics = config('comics');
    $navLinks = config('navbar');
    $footerLinks = config('footerNav');
    return view('client.comics', [
        "comics" => $comics,
        "navLinks" => $navLinks,
        "footerLinks" => $footerLinks
    ]);
})->name('comics');

