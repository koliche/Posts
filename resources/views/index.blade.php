@extends('master')
@section('title')
    Welcome
@endsection
@section('content')
    <h1>This is Post Index page</h1>
    @foreach ($posts as $post)
         <p>post title is: {{ $post->title}}</p>
        
    @endforeach
@endsection