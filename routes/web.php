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

Route::get('battle/sign_in', 'BattleController@sign_in');
Route::post('battle/sign_in', 'BattleController@sign_in');

Route::get('battle/init_user_param', 'BattleController@init_user_param');
Route::post('battle/init_user_param', 'BattleController@init_user_param');

Route::get('battle/draw_piece', 'BattleController@draw_piece');

Route::get('battle/purchase_piece', 'BattleController@purchase_piece');
Route::post('battle/purchase_piece', 'BattleController@purchase_piece');	

