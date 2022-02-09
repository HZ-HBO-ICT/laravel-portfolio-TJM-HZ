<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function show($post)
    {
        return view($post);
    }
}
