<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostComponent extends Component
{
    public $posts;
    public $content;

    public function render()
    {
        $this->posts = Post::with('user')->get();
        return view('livewire.post-component');
    }
    public function deletePost($postId)
    {
        Post::find($postId)->delete();
        $this->closeModal();
    }
    public function closeModal()
    {
        return redirect()->to('/dashboard');
    }
    public function updatePost($postId)
    {
        Post::find($postId)->update([
            'content' => $this->content
        ]);
        return redirect()->to('/dashboard');

    }
}
