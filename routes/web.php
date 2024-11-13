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


//root
Route::get('/', function () {
    return view('home');
})->name('home');


//about route(all members)
Route::get('/afiq-detail', function () {
    return view('about-afiq');
})->name('afiq-detail');

Route::get('/aliff-detail', function () {
    return view('about-aliff');
})->name('aliff-detail');

Route::get('/sandhiya-detail', function () {
    return view('about-sandhiya');
})->name('sandhiya-detail');

Route::get('/iman-detail', function () {
    return view('about-iman');
})->name('iman-detail');


//contact route
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
