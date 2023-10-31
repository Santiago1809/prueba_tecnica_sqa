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
            return redirect()->to('/dashboard'); // Redirige al usuario a su panel de control
        }

        $this->errorMessage = 'Credenciales inválidas. Por favor, inténtelo de nuevo.';
    }
}
