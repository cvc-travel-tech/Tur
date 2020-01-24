<?php

namespace App\Http\Controllers\Api;


use App\Blog;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{

    public function index()
    {
        return Blog::paginate();
    }
}
