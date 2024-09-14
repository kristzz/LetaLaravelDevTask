@extends('layouts.app')

@section('content')

    <h1>Edit Comment</h1>

    <form action="{{ route('posts.comments.update', [$comment->post, $comment]) }}" method="POST">
        @csrf
        @method('PUT')

        <textarea name="content" required>{{ $comment->content }}</textarea>

        <button type="submit">Update Comment</button>
    </form>

@endsection
