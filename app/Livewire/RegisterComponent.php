<?php

namespace App\Livewire;


use App\Models\User;
use Livewire\Component;

class RegisterComponent extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $errorMessage;
    public function render()
    {

        return view('livewire.register-component');
    }
    public function register()
    {
        $this->validate([
            'name' => 'required|string|min:3|unique:user',
            'email' => 'required|email|unique:user',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'
        ]);
        
        if ($this->hasError('name')) {
            $this->errorMessage = "Nombre de usuario ya está en uso";
        } else {
            if ($user = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => bcrypt($this->password)
            ])) {

                $userId = $user->id;
                $username = $user->name;
                session(['user_id' => $userId, 'username' => $username, 'logged' => true]);
                return redirect()->to('/dashboard');
            }
        }
    }
}
