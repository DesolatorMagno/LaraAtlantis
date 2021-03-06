<?php

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
    return view('tema-index');
});

Route::get('/tema', function () {
    return view('theme.theme-test');
})->name('theme');

Route::get('/tema/list', function () {
    return view('theme.list');
})->name('theme.list');



    Route::resource('theme', 'ThemeController');


