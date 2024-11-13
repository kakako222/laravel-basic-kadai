<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        // ビューのパスを 'posts.index' に修正
        return view('posts.index'); // ビューのパスを正しく指定
    }
}