@extends('master')
@section('title')
    Post show
@endsection
@section('content')
    <h1>This is Post Show page an id: {{ $post->id}} and title is: {{ $post->title}}!</h1>
    
@endsection