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

Route::get('header', function () {
    $headerLinks = [
        [
            'text' => 'characters',
            'link'=> '#',
            'active' => false,
        ],
        [
            'text' => 'comics',
            'link' => '/comics',
            'active' => true,
        ],
        [
            'text' => 'movies',
            'link' => '#',
            'active' => false,
        ],
        [
            'text' => 'tv',
            'link' => '#',
            'active' => false,
        ],
        [
            'text' => 'games',
            'link' => '#',
            'active' => false,
        ],
        [
            'text' => 'collectibles',
            'link' => '#',
            'active' => false,
        ],
        [
            'text' => 'videos',
            'link' => '#',
            'active' => false,
        ],
        [
            'text' => 'fans',
            'link' => '#',
            'active' => false,
        ],
        [
            'text' => 'news',
            'link' => '#',
            'active' => false,
        ],
        [
            'text' => 'shop',
            'link' => '#',
            'active' => false,
        ],
    ];
    return view('partials.header', ['headerLinks' => $headerLinks]);
});

