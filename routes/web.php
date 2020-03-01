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
// admin routes=====================
Route::get('/adminLock', 'adminController@adminLock')->name('adminLock');
Route::get('/admins', 'adminController@adminDashboard')->name('adminDashboard');


Route::get('/admins/charts', 'adminController@charts')->name('charts');
Route::get('/admins/lock', 'adminController@lock')->name('lock');
Route::get('/admins/tables', 'adminController@tables')->name('tables');

Route::get('/admins/documentation', 'adminController@documentation')->name('documentation');

// store routes===========================
Route::get('/admins/fixtures', 'adminController@fixtures')->name('fixtures');
Route::post('/fixturesStore', 'adminController@fixturesStore')->name('adminController.fixturesStore');
Route::get('/fixtures/edit/{id}', 'adminController@fixturesEdit')->name('adminController.fixturesEdit');
Route::get('/fixtures/update/{id}', 'adminController@fixturesUpdate')->name('adminController.fixturesUpdate');
Route::get('/fixtures/delete/{id}', 'adminController@fixturesDelete')->name('adminController.fixturesDelete');

//tournaments store, edit routes=======================
Route::get('/admins/tournaments', 'adminController@tournaments')->name('tournaments');
Route::post('/admins/tournaments', 'adminController@tournamentsStore')->name('adminController.tournamentsStore');
Route::get('/tournaments/edit/{id}', 'adminController@tournamentsEdit')->name('adminController.tournamentsEdit');
Route::get('/tournaments/update/{id}', 'adminController@tournamentsUpdate')->name('adminController.tournamentsUpdate');
Route::get('/tournaments/delete/{id}', 'adminController@tournamentsDelete')->name('adminController.tournamentsDelete');

//tournaments store, edit routes=======================
Route::get('/admins/gamemanagers', 'adminController@gamemanagers')->name('gamemanagers');
Route::post('/admins/gamemanagers', 'adminController@gamemanagersStore')->name('adminController.gamemanagersStore');
Route::get('/gamemanagers/edit/{id}', 'adminController@gamemanagersEdit')->name('adminController.gamemanagersEdit');
Route::get('/gamemanagers/update/{id}', 'adminController@gamemanagersUpdate')->name('adminController.gamemanagersUpdate');
Route::get('/gamemanagers/delete/{id}', 'adminController@gamemanagersDelete')->name('adminController.gamemanagersDelete');

//teams store, edit routes=======================
Route::get('/admins/teams', 'adminController@teams')->name('teams');
Route::post('/admins/teamsStore', 'adminController@teamsStore')->name('adminController.teamsStore');
Route::get('/teams/edit/{id}', 'adminController@teamsEdit')->name('adminController.teamsEdit');
Route::get('/teams/update/{id}', 'adminController@teamsUpdate')->name('adminController.teamsUpdate');
Route::get('/teams/delete/{id}', 'adminController@teamsDelete')->name('adminController.teamsDelete');

//players store, edit routes=======================
Route::get('/admins/players', 'adminController@players')->name('players');
Route::post('/admins/playersStore', 'adminController@playersStore')->name('adminController.playersStore');
Route::get('/players/edit/{id}', 'adminController@playersEdit')->name('adminController.playersEdit');
Route::get('/players/update/{id}', 'adminController@playersUpdate')->name('adminController.playersUpdate');
Route::get('/players/delete/{id}', 'adminController@playersDelete')->name('adminController.playersDelete');

//feedback delete
Route::get('/feedback/delete/{id}', 'adminController@feedbackDelete')->name('adminController.feedbackDelete');


// game manager routes==============================================================================================
Route::get('/allData','teamController@allData')->name('allData');

Route::get('/startMatch','teamController@startMatch')->name('startMatch');;
Route::get('/teamSelection','teamController@teamSelection')->name('teamSelection');


Route::get('/matchDetails', 'teamController@matchDetails')->name('matchDetails');

Route::get('/findPlayers','teamController@findPlayers')->name('findPlayers');
Route::post('/store','teamController@store')->name('store');

Route::post('/matchDetails/store/', 'teamController@storeMatchDetails')->name('matchDetails.store');

// live score
Route::get('/scoreUpdate', 'teamController@scoreUpdate')->name('scoreUpdate');

Route::get('/loginUser', 'teamController@loginUser')->name('loginUser');
Route::get('/loginAdmin', 'adminController@loginAdmin')->name('loginAdmin');


// user routes==============================================================================================

Route::get('/','UserController@home')->name('home');
Route::get('/matches','UserController@matches')->name('matches');
Route::get('/fixtures','UserController@fixtures')->name('userfixtures');
Route::get('/tournament','UserController@tournament')->name('usertournament');
Route::get('/players','UserController@player')->name('userplayers');
Route::get('/teams','UserController@team')->name('userteams');
Route::get('/feedback','UserController@feedback')->name('feedback');
Route::post('/sendContact','UserController@sendContact')->name('sendContact');
Route::post('/sendFeedback','UserController@sendFeedback')->name('sendFeedback');
Route::get('/contact-us','UserController@contactus')->name('contactus');
Route::get('/live-score','UserController@livescore')->name('livescore');
