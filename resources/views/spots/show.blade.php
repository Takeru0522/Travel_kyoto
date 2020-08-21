@extends('layouts.layout')

@section('title')
京都    
@endsection

@section('content')

<p>{{ $spot->name }}</p>
<p>{{ $spot->img }}</p>
<p>{{ $spot->content}}</p>
<p>{{ $spot->location }}</p>
<p>{{ $spot->created }}</p>
<p>{{ $spot->updated }}</p>

@endsection