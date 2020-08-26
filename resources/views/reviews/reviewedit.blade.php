<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="/css/app.css"> --}}
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>編集画面</title>
</head>
<body>
    <section class="container m-5">
        <div class="row justify-content-center">
            <div class="col-8">
                @if($errors->any())
   <ul>
       @foreach($errors->all() as $message)
            <li class="alert alert-danger">{{ $message }}</li>
       @endforeach
   </ul>
@endif
                <form action="{{ route('review.create') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">タイトル</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}"/>
                    </div>
                    <div class="form-group">
                        <label for="body">口コミ内容</label>
                        <textarea class="form-control" name="content" id="content">{{ old('content') }}</textarea>
                    </div>
                    <div class="form-group">
                        {{-- <label for="star">星</label> --}}
                        <input type="text" class="form-control" name="star" id="star" value="{{ old('star') }}"/>
                        <p>感想<br>
                            <select name="blood">
                            <option value="A">５</option>
                            <option value="B">４</option>
                            <option value="O">３</option>
                            <option value="AB">２</option>
                            <option value="AB">１</option>
                            </select></p>
                            <form type="get" action="#">
                                <div class="evaluation">
                                  <input id="star1" type="radio" name="star" value="5" />
                                  <label for="star1"><span class="text"></span>⭐⭐⭐⭐⭐</label>
                                  <input id="star2" type="radio" name="star" value="4" />
                                  <label for="star2"><span class="text"></span>⭐⭐⭐⭐</label>
                                  <input id="star3" type="radio" name="star" value="3" />
                                  <label for="star3"><span class="text"></span>⭐⭐⭐</label>
                                  <input id="star4" type="radio" name="star" value="2" />
                                  <label for="star4"><span class="text"></span>⭐⭐</label>
                                  <input id="star5" type="radio" name="star" value="1" />
                                  <label for="star5"><span class="text"></span>⭐</label>
                                </div>
                              </form>    
                        
                        
                    {{-- </div> <input type="star" class="form-control" name="star" id="star" value="{{ old('star') }}"/> --}}
                    
                    <div class="form-group">
                        <label for="img">画像</label>
                        <input type="text" class="form-control" name="img" id="img" value="{{ old('img') }}"/>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">更新</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>