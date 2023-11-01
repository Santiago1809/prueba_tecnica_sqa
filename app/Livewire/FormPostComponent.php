<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class FormPostComponent extends Component
{

    public $content;
    public $title;
    public $currentURL;
    public $urlParts;
    public $pathSegments;

    public function render()
    {
        $this->currentURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $this->urlParts = parse_url($this->currentURL);
        $this->pathSegments = explode("/", $this->urlParts['path']);
        return view('livewire.form-post-component');
    }
    
    public function post() {
        $this->validate([
            'title' => 'required|min:8|max:200',
            'content' => 'required|max:200'
        ]);

        Post::create([
            'content' => $this->content,
            'user_id' => session('user_id'),
            'title' => $this->title,
            'category_id' => intval($this->pathSegments[2])
        ]);
        return redirect()->to($this->currentURL);
    }
}

