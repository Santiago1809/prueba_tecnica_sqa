<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class FormPostComponent extends Component
{

    public $currentURL;
    public $urlParts;
    public $pathSegments;
    protected $listeners = [
        'editor:ready' => 'onEditorReady'
    ];
    public function render()
    {
        $this->currentURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $this->urlParts = parse_url($this->currentURL);
        $this->pathSegments = explode("/", $this->urlParts['path']);
        return view('livewire.form-post-component');
    }
    
}

