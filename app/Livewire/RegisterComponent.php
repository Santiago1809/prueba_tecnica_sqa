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
    public function render()
    {

        return view('livewire.register-component');
    }
    public function register()
    {
        $this->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:user',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);
        $newUser = User::where('email', $this->email)->first();
        $userId = $newUser->id;
        $username = $newUser->name;
        session((['user_id' => $userId, 'username' => $username, 'logged'=>true]));
        return redirect()->to('/dashboard');
    }
}
