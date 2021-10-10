<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Post;
use Illuminate\Http\Request;

class PostIndexController extends Controller
{
    public function index()
    {
        return PostResource::collection(Post::all());
    }
}
