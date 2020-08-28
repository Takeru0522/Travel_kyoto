@extends('layouts.app')

@section('title')
   
@endsection
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<a href="{{ route('review.create') }}" class="btn btn-primary btn-block">
    口コミ新規投稿
</a>
<div class="allback">
    <div class="container"> 
    <div class="bigbox">
        <div class="bigbox_left">
            <p class="spotname">{{$spot->name}}</p>
            <p class="imgsize">
            <img height="330px" src="{{ asset($spot->picture_path) }}" ></p>
            <p class="content">{{ $spot->content}}</p>
        </div>
        <div class="bigbox_center">
            
        </div>
        <div class="bigbox_right">
            
            <p class="spot_want_to">行きたい</p>
            <p class="spot_visited">行ってよかった</p>         

            <div class="rightbox">
                <div class="rightbigbox">
                    <div class="rightbox_left">
                        <p>所在地:{{$spot->location}}  </p>
                        
                    </div>
                    
                </div>
               
                     <div class="underbox">
                         <div class="goodbottom"> <P>投稿ありがとう{{$spot->spots_thanks}}</P></div>
                         
                     </div>
            </div>
        </div> 
    </div>
    <div class="reviewbox">
        <p>{{$spot->name}}のクチコミ</p>

        
        <p class="star">⭐️⭐️⭐️⭐️{{$spot->star}}</p>
        
        <div class="totalreview">
        　  <div class="username">
                <p>ユーザー名:銀閣寺大ファン</p>
                <p class="reviewtext">こんな綺麗な金色に輝く建物はみた事ありませんでした。一休さんが見たくなりました！</p>
            </div>
            
            <p class="reviewimg">投稿画像</p>
        </div>
    
    
    {{-- @foreach ($reviews as $review) --}}
{{--     <div class="m-4 p-4 border border-primary">
        <p>{{ $reviews->title }}</p>
        <p>{{ $reviews->content }}</p>
        <p>{{ $reviews->star}}</p>
        <p>{{ $reviews->img }}</p>
        <p>{{ $reviews->spot_id}}</p>
        <p>{{ $reviews->user_id }}</p>
        <p>{{ $reviews->created_at}}</p> --}}
        {{-- @if (Auth::check() && Auth::user()->id === $review->user_id) --}}
        {{-- <a class="btn btn-success" href="{{ route('review.edit', ['id' => $review->id]) }}">編集</a>
        <form action="{{ route('review.destroy', ['id' => $review->id]) }}" method="POST" class="d-inline">
            @csrf
            @method('delete')
            <button class="btn btn-danger">削除</button>
        </form> --}}
        {{-- @endif  --}}
    {{-- </div> --}}
    {{-- <div class=" mt-3 ml-3">
        <i class="far fa-heart fa-lg text-danger js-like"></i>
        <input class="review-id" type="hidden" value="{{ $review->id }}">
        <span class="js-like-num">200</span>
    </div> --}}
@endforeach

    </div>
</div>
{{-- <p>{{ $spot->location }}</p>
<p>{{ $spot->created_at }}</p>
<p>{{ $spot->updated_at }}</p> --}}


</div>
@endsection