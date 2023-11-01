<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostComponent extends Component
{
    public $posts;
    public $content;
    public $currentURL;
    public $urlParts;
    public $pathSegments;
    public $title;

    public function render()
    {
        $this->currentURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $this->urlParts = parse_url($this->currentURL);
        $this->pathSegments = explode("/", $this->urlParts['path']);
        $this->posts = Post::where('category_id', $this->pathSegments[2])->with('user')->get();
        return view('livewire.post-component');
    }
    public function deletePost($postId)
    {
        Post::find($postId)->delete();
        $this->closeModal();
    }
    public function closeModal()
    {
        return redirect()->to($this->currentURL);
    }
    public function updatePost($postId)
    {
        $post = Post::find($postId);

        if (!empty($this->title)) {
            $post->update([
                'content' => $this->content,
                'title' => $this->title,
            ]);
        } else {
            $post->update([
                'content' => $this->content,
            ]);
        }
        return redirect()->to($this->currentURL);

    }
}
