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
                        <input class="form-control" name="email" id="eamil" value="{{ old('email', $user->email) }}">
                    </div>
                    
                    <div class="form-group row">
                        <label for="picture" class="col-md-4 col-form-label text-md-right">Profile picutre</label>

                        <div class="col-md-6">
                            <input id="picture" type="file" name="picture"
                              class="form-control{{ $errors->has('picture') ? ' is-invalid' : '' }}"
                            >

                            @if ($errors->has('picture'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('picture') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="title">パスワード</label>
                        <input class="form-control" name="password" id="text" >
                    </div>
                    
                    <div class="text-right">
                        <button type="submit" class="btn-square">更新</button></main>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>

