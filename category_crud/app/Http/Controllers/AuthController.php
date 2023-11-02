<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function logout()
    {
        Session::flush();
        Session::put('logged', false);

        return redirect()->to('/');
    }
}
