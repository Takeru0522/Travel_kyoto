<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>マイページ</h2>
    <p>{{ $user->name }}</p>
    {{-- <p>{{ $user->img}}</p>   --}}
    <p>{{ $user->password}}</p>  
 
    <p>{{ $user->email }}</p>
    {{-- {{ $user->created_at }}</p> --}}
    {{-- 名前→{{$profile->name}} --}}
        {{-- プロフィール写真→{{$profile->image}} --}}
        {{-- 性別→{{$profile->gender}}
        居住地→{{$profile->prefecture}} --}}
        <a class="btn btn-success" href="{{ route('users.edit', ['id' => $user->id]) }}">編集</a>
    

        {{-- <h1>{{ $msg }}</h1> --}}
 
    <table border="1">
    <tr>
        <th>お気に入り</th>
        <th>行った</th>
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
