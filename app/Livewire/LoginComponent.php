<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginComponent extends Component
{
    public $email;
    public $password;
    public $errorMessage;
    public function render()
    {
        return view('livewire.login-component');
    }
    public function authenticate()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            $user = Auth::user();
            $userId = $user->id;
            $username = $user->name;

            session(['user_id' => $userId, 'username' => $username, 'logged'=>false]);
            session(['logged'=>true]);
            return redirect()->to('/dashboard');
        }

        $this->errorMessage = 'Credenciales inválidas. Por favor, inténtelo de nuevo.';
    }
}
