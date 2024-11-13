<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>laravel基礎</title>
</head>
<body>
    <p>投稿一覧</p>
    <table>
         <tr>
    
             <th>タイトル</th>
             <th>本文</th>
         </tr>
         @foreach($posts as $posts)
             <tr>
                 <td>{{ $posts->title }}</td>
                 <td>{{ $posts->content }}</td>
             </tr>            
         @endforeach       
     </table>
</body>
</html>
