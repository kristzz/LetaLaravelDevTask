@extends('layouts.app')

@section('content')

    <form method="GET" action="{{ route('posts.index') }}" class="mb-4">
        <div class="flex space-x-4">
            <input type="text" name="search" placeholder="Search posts" value="{{ request('search') }}" class="border p-2 rounded">

            <select name="category" class="border p-2 rounded">
                <option value="">All Categories</option>
                @foreach($post->categories as $category)
                    <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>

            <button type="submit" class="bg-blue-500 text-white p-2 rounded">Search</button>
        </div>
    </form>


    <h1>{{ $post->title }}</h1>
    <p>Author: {{ $post->user->name }}</p>
    <p>{{ $post->content }}</p>
    <p>{{ $post->created_at }}</p>
    <p>Categories: {{ $post->categories->pluck('name')->join(', ') }}</p>

    @foreach($post->comments as $comment)
        <div>
            <p>{{ $comment->user->name }}: {{ $comment->content }}</p>

            @if(Auth::id() == $comment->user_id)
                <a href="{{ route('posts.comments.edit', [$post, $comment]) }}">Edit</a>

                <form action="{{ route('posts.comments.destroy', [$post, $comment]) }}" method="POST" style="display:inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            @endif
        </div>
    @endforeach

    <h3>Add Comment</h3>
    <form action="{{ route('posts.comments.store', $post) }}" method="POST">
        @csrf
        <textarea name="content" required></textarea>
        <button type="submit">Add Comment</button>
    </form>
@endsection
