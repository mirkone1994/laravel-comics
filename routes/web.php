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
    $comics = config('comics');
    $info = config('info');
    return view('home', ['comics' => $comics], ['info' => $info]);
})->name('home');

Route::get('comics/{id}', function ($id) {
    $comics = config('comics');
    $comic = $comics[$id];
    $info = config('info');
    return view('comic', compact('comic'), ['info' => $info]);
})->name('comic');
