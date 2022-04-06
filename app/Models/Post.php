<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['foo_id', 'title', 'description', 'body'];
    // protected $fillable = ['title', 'description', 'body'];
}
