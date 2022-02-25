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

    public function show(Post $post)
    {
        // Show a single resource

        // $post = Post::where('id', $id)->firstOrFail();

        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function create()
    {
        // Show a view to create a new resource

        return view('posts.create');
    }

    public function store(Request $request)
    {
        // Persist the resource

        // $request

        Post::create($this->validatePost($request));

        return redirect(route('posts.index'));
    }

    public function edit(Post $post)
    {
        // Show a view to edit an existing resource
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        Post::where('id', $id)->update($this->validatePost($request));
        return redirect('/posts/'. $id);
    }

    public function destroy(Post $post)
    {
        // $post = Post::where('id', $id)->firstOrFail();
        // Destroy the resource
        $post->delete();

        return redirect(route('posts.index'));
    }

    /**
     * @return array
     */
    public function validatePost(Request $request): array
    {
        return request()->validate([
            'title' => 'required',
            'description' => 'required',
            'body' => 'required',
        ]);
    }
}
