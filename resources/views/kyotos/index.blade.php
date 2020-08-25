@extends('layout')
@section('title')
<a class="btn btn-success" href="{{ route('spot.edit', ['id' => $spot->id]) }}">編集</a>

<form action="{{ route('spot.destroy', ['id' => $spot->id]) }}" method="post" class="d-inline">
    @csrf
    @method('delete')
    <button class="btn btn-danger">削除</button>
</form>
@endsection