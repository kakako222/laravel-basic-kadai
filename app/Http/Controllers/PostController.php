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
    
        // 変数$postをposts/show.blade.phpファイルに渡す
        return view('posts.show', compact('post'));
    }
    
    // 投稿作成フォームを表示
    public function create()
    {
        return view('posts.create');  // posts/create.blade.php を表示
    }

    // 投稿データをデータベースに保存
    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|max:20', //タイトル必須、最大２０文字
            'content' => 'required|max:200', //内容必須、最大200文字
        ]);

        $post = Post::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
        ]);

        return redirect('/posts');
    }
}

