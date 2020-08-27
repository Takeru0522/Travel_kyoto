@extends('layouts.layout')

@section('title')
   
@endsection
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<div class="allback">
    <div class="container"> 
    <div class="bigbox">
        <div class="bigbox_left">
            <p class="imgsize"></p>
            <img src="{{asset("storage/app/public/images/profilePicture/kiyomizu.jpg")}}" alt="spot_pictute" title="清水寺">
            <p class="content">{{ $spot->content}}</p>
        </div>
        <div class="bigbox_center">
            
        </div>
        <div class="bigbox_right">
            <p class="spotname">{{$spot->name}}</p>
            <p class="spot_want_to">行きたい</p>
            <p class="spot_visited">行ってよかった</p>
            <div class="rightbox">
                <div class="rightbigbox">
                    <div class="rightbox_left">
                        <p> 住所 </p>
                        <p> 電話番号 </p>
                        <p> 交通アクセス </p>
                    </div>
                       
                </div>
                     <div class="underbox">
                         <div class="goodbottom"> <P>いいね</P></div>
                         <div class="review"><P>クチコミ投稿</P></div>
                     </div>
            </div>
        </div> 
    </div>
    <div class="reviewbox">
        <p>{{$spot->name}}のクチコミ</p>
        
        
        
        
    　 <div class="totalreview">
        　  <div class="username">
           <p>ユーザー名表示</p>
        <p class="reviewtext">観光地のクチコミ内容がここに入ります</p></div>
        <p class="star">五段階評価</p>  
        <p class="reviewimg">投稿画像</p>
    　</div>
            
        　　　　　
            
                
    </div>
</div>
{{-- <p>{{ $spot->location }}</p>
<p>{{ $spot->created_at }}</p>
<p>{{ $spot->updated_at }}</p>
 --}}

</div>
@endsection