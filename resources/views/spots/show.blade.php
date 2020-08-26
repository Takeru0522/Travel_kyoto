@extends('layouts.app')

@section('title')
   
@endsection
@section('content')
<a href="{{ route('review.create') }}" class="btn btn-primary btn-block">
    新規投稿
</a>
<div class="container"> 
    <div class="bigbox">
        <div class="bigbox_left">
            <p class="imgsize"></p>
            <img src="image.png" alt="清水寺の写真" title="清水寺">
            {{-- <p>{{ $spot->content}}</p>
        </div>
        <div class="bigbox_right">
            <p class="spotname">{{$spot->name}}</p> --}}
            <div class="rightbox">
                <div class="rightbigbox">
                    <div class="rightbox_left">
                        <p> 住所 </p>
                        <p> 電話番号 </p>
                        <p> 交通アクセス </p>
                    </div>
                    <div class="rightmap">
                        <p> MAP </p>
                    </div>      
                </div>
                     <div class="underbox">
                         <div> <P>いいね</P></div>
                         <div><P>クチコミ投稿</P></div>
                     </div>
            </div>
        </div> 
    </div>
    <div class="reviewbox">
        <p>観光地のクチコミ</p>
        <p>星星星星星</p>
        <div class="reviewspotname">
            <p>スポット名表示</p>
        </div>
        <div class="username">
            <p>ユーザー名表示</p>
        </div>
    　 <div class="totalreview">
        　 <p class="reviewtext">観光地のクチコミ内容がここに入ります</p>
            <p class="reviewimg">投稿画像</p>
    　</div>
    <a href="{{ route('spot.create') }}" class="btn btn-primary btn-block">
        新規投稿
    </a>
    
    　　　@foreach ($reviews as $review)
    <div class="m-4 p-4 border border-primary">
        <p>{{ $review->title }}</p>
        <p>{{ $review->content }}</p>
        <p>{{ $review->star}}</p>
        <p>{{ $review->img }}</p>
        <p>{{ $review->spot_id}}</p>
        <p>{{ $review->user_id }}</p>
        <p>{{ $review->created_at}}</p>
        <form action="{{ route('review.destroy', ['id' => $review->id]) }}" method="POST" class="d-inline">
            @csrf
            @method('delete')
            <button class="btn btn-danger">削除</button>
        </form>
    </div>
@endforeach　　
            
                
    </div>
{{-- <p>{{ $spot->location }}</p>
<p>{{ $spot->created_at }}</p>
<p>{{ $spot->updated_at }}</p>
 --}}

</div>
@endsection