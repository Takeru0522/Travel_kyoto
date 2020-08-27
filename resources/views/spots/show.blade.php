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
            <img height="330px" src="{{ asset($spot->picture_path) }}" >
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
                        <p>所在地:{{$spot->location}}  </p>
                        <p> {{$spot->tel}}電話番号 </p>
                        <p> {{$spot->access}}交通アクセス </p>
                    </div>
                       
                </div>
                     <div class="underbox">
                         <div class="goodbottom"> <P>投稿ありがとう{{$spot->spots_thanks}}</P></div>
                         <div class="review"><P>クチコミ投稿</P></div>
                     </div>
            </div>
        </div> 
    </div>
    <div class="reviewbox">
        <p>{{$spot->name}}のクチコミ</p>
        <p class="star">五段階評価{{$spot->star}}</p> 
        
        
        
    　 <div class="totalreview">
        　  <div class="username">
           <p>ユーザー名表示</p>
        <p class="reviewtext">観光地のクチコミ内容がここに入ります</p></div>
        
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