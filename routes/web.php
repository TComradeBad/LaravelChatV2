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
    return view('welcome');
});
/** Chat Routes */
Route::middleware("auth")->group(function () {
    Route::get("/user_chats", "ChatController@index");

    Route::get("/private_chat/{id}", "ChatController@showPrivateChat");

    Route::post("/create_chat", "ChatController@createChat");

    Route::post("/message","ChatController@message");
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


