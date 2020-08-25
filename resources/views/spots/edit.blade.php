{{-- @extends('layouts.app')
@section('title')
編集
@endsection
@section('content') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
     <section class="container m-5">
        <div class="row justify-content-center">
            <div class="col-8">
                {{-- @if($errors->any())
                   <ul>
                     @foreach($errors->all() as $message)
                         <li class="alert alert-danger">{{ $message }}</li>
                     @endforeach
                   </ul>
                @endif --}}
                <form action="{{ route('spots.update',['id' => $spot->id]) }}" method="POST"　enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name">観光地名</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name',$spot->name) }}"/>
                    </div>
                    
                    <div class="form-group">
                        <label for="content">紹介文</label>
                        <textarea class="form-control" name="content" id="content">{{ old('content',$spot->content) }}</textarea>
                    </div>
                    <div class="form-group ">
                        <label for="picture">写真</label>

                        
                            <input id="picture" type="file" name="picture"
                              class="form-control{{ $errors->has('picture') ? ' is-invalid' : '' }}"
                            >

                            @if ($errors->has('picture'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('picture') }}</strong>
                                </span>
                            @endif
                        
                    </div>
                        
                        
                    <div class="form-group">
                        <label for="location">所在地</label>
                        <textarea class="form-control" name="location" id="location">{{ old('location',$spot->location) }}</textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="iflame_code">共有コード</label>
                        <textarea class="form-control" name="iflame_code" id="iflame_code">{{ old('iflame_code',$spot->iflame_code) }}</textarea>
                    </div>    
                    
                     <p>あなたがこの観光地に対する五段階評価をしてください</p>
                        <p>
                            <span class="star5_rating" data-rate="4"></span>
                        </p>
                        <p>
                            <span class="star5_rating" data-rate="2.5"></span>
                        </p>
                        <p><span class="star5_rating" data-rate="5"></span> 星5</p>
                        <p><span class="star5_rating" data-rate="4.5"></span> 星4.5</p>
                        <p><span class="star5_rating" data-rate="4"></span> 星4</p>
                        <p><span class="star5_rating" data-rate="3.5"></span> 星3.5</p>
                        <p><span class="star5_rating" data-rate="3"></span> 星3</p>
                        <p><span class="star5_rating" data-rate="2.5"></span> 星2.5</p>
                        <p><span class="star5_rating" data-rate="2"></span> 星2</p>
                        <p><span class="star5_rating" data-rate="1.5"></span> 星1.5</p>
                        <p><span class="star5_rating" data-rate="1"></span> 星1</p>
                        <p><span class="star5_rating" data-rate="0.5"></span> 星0.5</p>
                        <p><span class="star5_rating" data-rate="0"></span> 星0</p>
                    
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">編集</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

</body>
</html>

{{-- @endsection --}}