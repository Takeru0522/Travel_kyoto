<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="/css/main.css"> --}}
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>新規投稿画面</title>
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
                        
                        <label for="star">星</label>
                        <input type="number" step="0.1" class="form-control" name="title" id="title" value="{{ old('title') }}"/>   
                        
                           <select name="blood">
                           <option value="0">0</option>
                           <option value="0.5">0.5</option>
                           <option value="1">1⭐</option>
                           <option value="1.5">1.5⭐</option>
                           <option value="2">2⭐⭐</option>
                           <option value="2.5">2.5⭐⭐</option>
                           <option value="3">3⭐⭐⭐</option>
                           <option value="3.5">3.5⭐⭐⭐</option>
                           <option value="4">4⭐⭐⭐⭐</option>
                           <option value="4.5">4.5⭐⭐⭐⭐</option>
                           <option value="5">5⭐⭐⭐⭐⭐</option> 
                           </div>  
                    {{-- <input type="number" class="form-control" name="star" id="star" value="{{ old('star') }}"/> 
                    <p>星 ：<br> --}}

                    </select></p>
                    <div class="form-group">
                        <label for="picture">写真</label>
                            <input id="picture" type="file" name="picture"
                              class="form-control" value="{{ old('picture') }}"/>
                    </div>  


                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">作成</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>