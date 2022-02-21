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

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function show($url)
    {
        // Show a single resource

        $post = Post::where('url', $url)->firstOrFail();

        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function create()
    {
        // Show a view to create a new resource

        return view('posts.create');
    }

    public function store()
    {
        // Persist the resource

        $post = new Post();
        $post->title = request('title');
        $post->description = request('description');
        $post->body = request('body');
        $post->url = request('url');

        $post->save();

        return redirect('/blog');
    }

    public function edit($url)
    {
        $post = Post::where('url', $url)->firstOrFail();
        // Show a view to edit an existing resource
        return view('posts.edit', ['post' => $post]);
    }

    public function update($url)
    {
        $post = Post::where('url', $url)->firstOrFail();
        // Persist the edited resource
        $post->title = request('title');
        $post->description = request('description');
        $post->body = request('body');
        $post->url = request('url');
        $post->save();

        return redirect('/blog/'. $post->url);
    }

    public function destroy($url)
    {
        $post = Post::where('url', $url)->firstOrFail();
        // Destroy the resource
        $post->delete();

        return redirect('/blog');
    }
}
