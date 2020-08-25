
@extends('layouts.app')

@section('title')
一覧表示画面
@endsection

@section('content')
<a href="{{ route('spot.create') }}" class="btn btn-primary btn-block">
    新規投稿
</a>
    @foreach ($spots as $spot)
    <div class="m-4 p-4 border border-primary">
            <p>{{ $spot->name }}</p>
            <p>{{ $spot->content }}</p>
            <p>{{ $spot->img }}</p>
            <p>{{ $spot->location }}</p>
            <p>{{ $spot->iflame_code }}</p>
            <p>{{ $spot->created_at }}</p>
        </div>
    @endforeach
@endsection