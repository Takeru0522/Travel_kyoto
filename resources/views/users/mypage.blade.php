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
    <p>写真：{{ $user->img}}</p>   
    
    <a class="btn btn-success" href="{{ route('users.edit', ['id' => $user->id]) }}">編集</a>
 

{{-- <h1>{{ $msg }}</h1>  --}}

 <table border="1">
    <tr>

        <th>⭐️行きたいリスト</th>
        <th>⭐️行ったリスト</th>
     </tr>
    <p>{{ $want->spot_id }}</p>
    <p>{{ $want->user_id }}</p>
     
    {{-- @foreach ($wants as $want) 
    <div class="m-4 p-4 border border-primary">
    <tr>
         <td>{{ $want->user_id }}</td> 
         <td>{{ $want->spot_id }}</td> --}}
        
    {{-- </tr>  --}}
     {{-- @endforeach    --}}
</table>
</body>
</html> 
