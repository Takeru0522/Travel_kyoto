
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>一覧表示画面</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    
                        You are logged in!
                        {{-- <a href="{{ route('mypage') }}">マイページへ</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- @foreach ($users as $user)
        <div class="m-4 p-4 border border-primary">

            <p>{{ $user->name }}</p>
            {{-- <p>{{ $user->img/test.jpg}}</p> --}}
            {{-- <p>{{ $user->email }}</p>
            <p>{{ $user->created_at }}</p>
        </div>
    @endforeach --}} 
</body>
</html>