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
                @if($errors->any())
                   <ul>
                     @foreach($errors->all() as $message)
                         <li class="alert alert-danger">{{ $message }}</li>
                     @endforeach
                   </ul>

                @endif
                <form action="{{ route('spots.update',['id' => $spot->id]) }}" method="POST" enctype="multipart/form-data">
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

                    <div class="form-group">
                        <label for="picture_path">写真</label>
                        <input id="picture_path" type="file" name="picture_path"
                        class="form-control" value="{{ old('picture_path') }}"/>
                    </div>

                    {{-- <div class="form-group ">
                        <label for="picture_path">写真</label>


                            <input id="picture_path" type="file" name="picture_path"
                              class="form-control{{ $errors->has('picture_path') ? ' is-invalid' : '' }}"
                            >

                            @if ($errors->has('picture_path'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('picture_path') }}</strong>
                                </span>
                            @endif

                    </div> --}}


                    <div class="form-group">
                        <label for="location">所在地</label>
                        <textarea class="form-control" name="location" id="location">{{ old('location',$spot->location) }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="iframe_code">共有コード</label>
                        <textarea class="form-control" name="iframe_code" id="iframe_code">{{ old('iframe_code',$spot->iframe_code) }}</textarea>
                    </div>



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
