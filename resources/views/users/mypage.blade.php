<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    　　<h2>マイページ</h2>

    <p>名前：{{ $user->name }}</p>

    <p>メールアドレス：{{ $user->email }}</p>
    {{-- <p>{{ $user->img}}</p>   --}}
    
    <p>パスワード：{{ $user->password}}</p>  
 
    {{-- {{ $user->created_at }}</p> --}}
    {{-- 名前→{{$profile->name}} --}}
        {{-- プロフィール写真→{{$profile->image}} --}}
        {{-- 性別→{{$profile->gender}}
        居住地→{{$profile->prefecture}} --}}
        <a class="btn btn-success" href="{{ route('users.edit', ['id' => $user->id]) }}">編集</a>


 
    <pre>
        {{-- <h1>{{ $msg }}</h1> --}}
 
    <table border="1">
    <tr>
        <th>⭐️行きたいリスト</th>
        <th>⭐️行ったリスト</th>
    </tr>
    {{-- @foreach ($books as $book)
    <tr>
        <td>{{ $book->title }}</td>
        <td>{{ $book->author }}</td>
    </tr>
    @endforeach --}}
</table>
</body>
</html>
