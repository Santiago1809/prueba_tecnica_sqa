<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function logout()
    {
        Session::flush();
        Session::put('logged', false);

        return redirect()->to('/');
    }

    public function update(int $postId, Request $request)
    {
        Post::where('id', $postId)->update([
            'title' => $request->title,
            'content' => $request->content
        ]);

        return redirect()->to("http://$_SERVER[HTTP_HOST]/posts/$request->category");
    }
}
