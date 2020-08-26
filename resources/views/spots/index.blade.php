<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">>
    <link rel="stylesheet" href="/css/app.css">
    <title>一覧表示画面</title>
</head>
<body>
    <header>
        <h1 class="headline">
          <a>サンプルのサイト</a>
        </h1>
        <ul class="nav-list">
          <li class="nav-list-item">
            <a>Home</a>
          </li>
          <li class="nav-list-item">login</li>
          <li class="nav-list-item">logout</li>
        </ul>
    </header>
    @foreach ($spots as $spot)
        <div class="m-4 p-4 border border-primary">
            <p>{{ $spot->name }}</p>
            <p>{{ $spot->content }}</p>
            <p>{{ $spot->img }}</p>
            <p>{{ $spot->location }}</p>
            <p>{{ $spot->iflame_code }}</p>
            <p>{{ $spot->created_at }}</p>
        </div>
    @endforeach
</body>
</html>