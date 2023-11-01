<?php

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (!Session::has('logged')) {
        Session::put('logged', false);
    }

    if (Session::get('logged')) {
        return redirect('dashboard');
    } else {
        return view('welcome');
    }
});

Route::get('/dashboard', function () {
    if (Session::get('logged')) {
        return view('dashboard');
    } else {
        return redirect()->to('/');
    }
});

Route::get('/logout', 'AuthController@logout')->name('logout');
