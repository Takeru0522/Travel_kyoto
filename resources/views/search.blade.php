@extends('layouts.app')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
@section('content')
<div class="container">
@if(isset($spots))     
      @foreach ($spots as $spot)
      <div class="card" style="width: 18rem;">
        <img src="{{ $spot->picture_path }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $spot->name }}</h5>
          <p class="card-text">{{ $spot->content }}</p>
          <p class="card-text">{{ $spot->location }}</p>
          <p class="card-text">{{ $spot->iframe_code }}</p>
          <a href="{{ route('spots.show',['id' => $spot->id]) }}" class="btn btn-primary">詳細</a>
        </div>
      </div>
      @endforeach
@endif      
@if(!empty($message))
<div class="alert alert-primary" role="alert">{{ $message}}</div>
@endif
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" 
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" 
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
@endsection