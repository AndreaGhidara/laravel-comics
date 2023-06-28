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
    $data = [
        'linkNav' => config('store.linkNav'),
        'comicsInfoShop' => config('store.comicsInfoShop'),
        'footerDcComics' => config('store.footerDcComics'),
        'footerShop' => config('store.footerShop'),
        'footerDc' => config('store.footerDc'),
        'footerSites' => config('store.footerSites'),
        'comicx' => config('comics'),

    ];

    return view('welcome', $data);
});


// Route::get('/otherpage', function () {
//     $links = config('store.someLinks');
//     return view('other', compact('links'));
// });
