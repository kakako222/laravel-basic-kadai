<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class ProductController extends Controller
{
    public function index() {
        // booksテーブルからすべてのデータを取得し、変数$postsに代入する
        $posts = DB::table('posts')->get();

        // 変数$booksをposts/index.blade.phpファイルに渡す
        return view('posts.index', compact('posts'));
    }   
    public function show($id) {
        // URL'/posts/{id}'の'{id}'部分と主キー（idカラム）の値が一致するデータをpostsテーブルから取得し、変数$postに代入する
        $post = Product::find($id);

        // 変数$posttをposts/show.blade.phpファイルに渡す
        return view('posts.show', compact('posts'));
    }
}