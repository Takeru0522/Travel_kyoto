@extends('layouts.app')

@section('title')
観光地登録画面
@endsection

@section('content')
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
                <form action="{{ route('spot.create') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">観光地名</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}"/>
                    </div>
                    <div class="form-group">
                        <label for="content">概要</label>
                        <textarea class="form-control" name="content" id="content">{{ old('content') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="picture_path">写真</label>
                            <input id="picture_path" type="file" name="picture_path"
                              class="form-control" value="{{ old('picture_path') }}"/>
                    </div>
                    <div class="form-group">
                        <label for="location">所在地</label>
                        <textarea class="form-control" name="location" id="location">{{ old('location') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="iframe_code">共有コード</label>
                        <textarea class="form-control" name="iframe_code" id="iframe_code">{{ old('iframe_code') }}</textarea>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">作成</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
