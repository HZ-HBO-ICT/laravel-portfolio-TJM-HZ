<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show($url)
    {
        $post = DB::table('posts')->where('url', $url)->first();

        return view('post', [
            'post' => $post
        ]);
    }
}
