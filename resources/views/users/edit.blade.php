<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>編集画面</title>
</head>
<body>
    <section class="container m-5">
        <div class="row justify-content-center">
            <div class="col-8">
                @if($errors->any())
                    <ul>   <ul style="list-style: none">
                        @foreach($errors->all() as $message)
                        <li class="alert alert-danger">{{ $message }}</li>
                        
                        @endforeach 
                    </ul>
                @endif
                <form action="{{ route('users.update', ['id' => $user->id]) }}" method="post">
                    @csrf
                    @method('put')
                  <main>  
                    <div class="form-group">
                        <label for="name">名前</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $user->name) }}">
                    </div>
                    <div class="form-group">
                        <label for="email">メールアドレス</label>
                        <textarea class="form-control" name="email" id="eamil">{{ old('email', $user->email) }}</textarea>
                    </div>
                    <!--
                    <div class="form-group">
                        <label for="title">パスワード</label>
                        {{-- <textarea class="form-control" name="password" id="text">{{ old('password', $user->password) }}</textarea> --}}
                    </div>
                    -->
                    <div class="text-right">
                        <button type="submit" class="btn-square">更新</button></main>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>

