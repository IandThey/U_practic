<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/arend', function () {
    return view('arend');
})->name('arend');

Route::get('/', function () {
    return view('home');
})->name('home');

// Route::name('user.')->groop(function(){
//     Route::view('/user_cabinet','user_cabinet')->middleware('auth')->name('user_cabinet');
// });

Route::get('/login', function(){
    if(Auth::check()){
        redirect(route('home'));
    }
    return view('login');
})->name('login');

Route::get('/register', function () {
    if(Auth::check()){
        redirect(route('home'));
    }
    return view('register');
})->name('register');

// Route::post('/login', [

// ])->name('login');

// Route::post('/logoout',[

// ])->name('logoout');

// Route::post('/register',[

// ])->name('registresh');

Route::post('/register', 'App\Http\Controllers\registerController@register_form');

Route::post('/login', 'App\Http\Controllers\registerController@login_form');

Route::get('/tovar/{id}','App\Http\Controllers\buyController@buy');

Route::post('/tovar/{id}','App\Http\Controllers\arendController@arend');

Route::get('/remove','App\Http\Controllers\removeController@remove');

Route::get('/kabinet','App\Http\Controllers\arendController@kabinet')->name('kabinet');