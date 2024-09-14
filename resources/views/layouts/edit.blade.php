@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ $post->title }}">
        </div>

        <div>
            <label for="content">content</label>
            <textarea name="content" id="content">{{ $post->content }}</textarea>
        </div>

        <div>
            <label for="categories">Categories</label>
            <select name="categories[]" id="categories" multiple>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                        {{ in_array($category->id, $post->categories->pluck('id')->toArray()) ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit">Update Post</button>
    </form>
@endsection
