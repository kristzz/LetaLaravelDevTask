@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>Author: {{ $post->user->name }}</p>
    <p>{{ $post->content }}</p>
    <p>Categories: {{ $post->categories->pluck('name')->join(', ') }}</p>
@endsection
