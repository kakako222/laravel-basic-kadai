<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿作成</title>
</head>
<body>
    <h1>投稿作成</h1>

 <!--バリデーションエラーの時に表示 -->
   @if($errors->any())
        <div style="color: red;">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif    

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf  <!-- CSRFトークンを追加 -->
        <div>
            <label for="title">タイトル</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="content">内容</label>
            <textarea name="content" id="content" rows="5" required></textarea>
        </div>
        <button type="submit">投稿する</button>
    </form>
</body>
</html>