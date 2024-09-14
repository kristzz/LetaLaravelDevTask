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
            <label for="content">Content</label>
            <textarea name="content" id="content">{{ $post->content }}</textarea>
        </div>

        <div>
            <label>Categories</label>
            <div id="category-buttons">
                @foreach($categories as $category)
                    <button type="button" 
                            class="category-btn {{ in_array($category->id, $post->categories->pluck('id')->toArray()) ? 'selected' : '' }}" 
                            data-category-id="{{ $category->id }}">
                        {{ $category->name }}
                    </button>
                    @if (in_array($category->id, $post->categories->pluck('id')->toArray()))
                        <input type="hidden" name="categories[]" value="{{ $category->id }}">
                    @endif
                @endforeach
            </div>
        </div>

        <button type="submit">Update Post</button>
    </form>

    <script>
        document.querySelectorAll('.category-btn').forEach(button => {
            button.addEventListener('click', function() {
                const categoryId = this.getAttribute('data-category-id');
                let hiddenInput = document.querySelector('input[name="categories[]"][value="'+categoryId+'"]');

                if (hiddenInput) {
                    // If the category is already selected, remove it
                    hiddenInput.remove();
                    this.classList.remove('selected');
                } else {
                    // If the category is not selected, create a hidden input for it
                    hiddenInput = document.createElement('input');
                    hiddenInput.type = 'hidden';
                    hiddenInput.name = 'categories[]';
                    hiddenInput.value = categoryId;
                    document.querySelector('form').appendChild(hiddenInput);
                    this.classList.add('selected');
                }
            });
        });
    </script>

    <style>
        .category-btn {
            margin: 5px;
            padding: 10px;
            border: 1px solid #ccc;
            cursor: pointer;
            background-color: #f0f0f0;
        }

        .category-btn.selected {
            background-color: #007bff;
            color: white;
        }
    </style>
@endsection
