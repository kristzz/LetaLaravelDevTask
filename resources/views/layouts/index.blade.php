@extends('layouts.app')

@section('content')

    <h1>Posts</h1>

    <form id="search-form" method="GET" action="{{ route('posts.index') }}" class="mb-4">

        <div class="flex space-x-4">

            <input type="text" name="search" placeholder="Search posts" value="{{ request('search') }}" class="border p-2 rounded">

            <select name="category" onchange="this.form.submit()" class="border p-2 rounded">
                <option value="">All Categories</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>

            <button type="submit" class="bg-blue-500 text-white p-2 rounded">Search</button>

        </div>
    </form>

    <a href="{{ route('posts.create') }}">Create Post</a>

    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }} | {{$post->content}}</a>
                <p>By {{ $post->user->name }} | Categories: {{ $post->categories->pluck('name')->join(', ') }}</p>
                @if (Auth::id() === $post->user_id)
                    <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                @endif
            </li>
        @endforeach
    </ul>

@endsection
