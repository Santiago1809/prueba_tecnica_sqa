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
            $_SESSION['user_id'] = $user->id;
            $_SESSION['username'] = $user->name;
            return redirect()->to('/dashboard');
        }

        $this->errorMessage = 'Credenciales inválidas. Por favor, inténtelo de nuevo.';
    }
}
