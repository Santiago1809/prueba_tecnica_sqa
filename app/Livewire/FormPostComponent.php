<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class FormPostComponent extends Component
{

    public $content;

    public function render()
    {
        return view('livewire.form-post-component');
    }

    public function post() {
        $this->validate([
            'content' => 'required|max:200'
        ]);

        Post::create([
            'content' => $this->content,
            'user_id' => session('user_id')
        ]);
        $this->content = '';
        return redirect()->to('/dashboard');
    }
}

