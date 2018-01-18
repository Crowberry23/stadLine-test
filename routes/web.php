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
    return view('pages.accueil');
});


Route::get('/styleguide', function () {
    return view('styleguide');
});

Route::get('/badgeTest', 'BadgesController@getTestPage');

//Start game
Route::get('/start-tour', function () {
    return view('pages.start-tour');
})->name('start-tour');
