<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        // Render a list of resources

        $posts = Post::latest()->get();

        return view('blog', [
            'posts' => $posts
        ]);
    }

    public function show($url)
    {
        // Show a single resource

        $post = Post::where('url', $url)->firstOrFail();

        return view('post', [
            'post' => $post
        ]);
    }

    public function create()
    {
        // Show a view to create a new resource
    }

    public function store()
    {
        // Persist the resource
    }

    public function edit(Post $post)
    {
        // Show a view to edit an existing resource
    }

    public function update(Post $post)
    {
        // Persist the edited resource
    }

    public function destroy(Post $post)
    {
        // Destroy the resource
    }


}
