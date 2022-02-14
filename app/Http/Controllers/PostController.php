<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    public function show($url)
    {
        $post = Post::where('url', $url)->firstOrFail();

        return view('post', [
            'post' => $post
        ]);
    }
}
