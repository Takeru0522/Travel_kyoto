<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
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
                        <button type="submit" class="btn btn-primary">更新</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>

