<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        // postsテーブルからすべてのデータを取得し、変数$postsに代入する
        $posts = DB::table('posts')->get();

        /**<-- FORDEBUG */
        \Log::debug($posts);
        /* FORDEBUG -->**/

        // 変数$postsをposts/index.blade.phpファイルに渡す
        return view('posts.index', compact('posts'));
    }

    
    
    public function show($id) {
        // URL'/posts/{id}'の'{id}'部分と主キー（idカラム）の値が一致するデータをpostsテーブルから取得し、変数$postに代入する
        $post = Post::find($id);
    
        // データが存在しない場合、エラーメッセージを表示
        if (!$post) {
            return "Post not found.";  // データがない場合
        }
    
        // 変数$postをposts/show.blade.phpファイルに渡す
        return view('posts.show', compact('post'));
    }
    
}

