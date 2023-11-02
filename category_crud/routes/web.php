<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
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

Route::get('/logout', [AuthController::class, 'logout']);
