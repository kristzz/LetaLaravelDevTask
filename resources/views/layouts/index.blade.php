@extends('layouts.app')

@section('content')
    <div class=" flex flex-col justify-center items-center mb-4 w-[100vw]">
        <div class="flex flex-col rounded-2xl min-w-[60vw] max-w-[60vw]">
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
            <a class="rounded bg-slate-200 w-28 p-2 text-center" href="{{ route('posts.create') }}">Create a Post</a>
        </div>
    </div>


    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post->id) }}">
                    <x-posts-component :post="$post" />
                </a>
            </li>
        @endforeach
    </ul>

@endsection
