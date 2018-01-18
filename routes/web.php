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


//Historic
Route::group(['prefix' => 'historic'], function () {
  Route::get('/getPage','GamesController@getHistoricPage');
  Route::post('/load', 'GamesController@loadHistoric');
});

//Game
Route::group(['prefix' => 'game'], function () {
  Route::post('/create','GamesController@createGame');
  Route::post('/newTurn','GamesController@beginTurn');
  Route::post('/fillBets','GamesController@fillBet');
  Route::post('/nextTurn','GamesController@nextTurn');
});

//Temp static pages
Route::get('/choose-players', function () {
    return view('pages.choose-players');
})->name('choose-players');

Route::get('/badgeTest', 'BadgesController@getTestPage');

//Start game
Route::get('/start-tour', function () {
    return view('pages.start-tour');
})->name('start-tour');
