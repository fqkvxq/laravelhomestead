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

// トップページの処理
Route::get('/', 'ToppageController@index')->name('/');

// 会員登録・ログイン
Auth::routes();

// Twitterログイン
Route::get('/twitter-login','TwitterController@login')->name('twitter-login');

// ログイン後ページ
Route::get('/home', 'HomeController@index')->name('home');

// プロフィールページ
Route::get('/profile', 'ProfileController@index')->name('home');