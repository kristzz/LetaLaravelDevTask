@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
        </div>

        <div>
            <label for="content">Content</label>
            <textarea name="content" id="content">{{ old('content') }}</textarea>
        </div>

        <div>
            <label>Categories</label>
            <div id="category-buttons">
                @foreach($categories as $category)
                    <button type="button"
                            class="category-btn"
                            data-category-id="{{ $category->id }}">
                        {{ $category->name }}
                    </button>
                @endforeach
            </div>
        </div>

        <button type="submit">Create Post</button>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>

    <script>
        document.querySelectorAll('.category-btn').forEach(button => {
            button.addEventListener('click', function() {
                const categoryId = this.getAttribute('data-category-id');
                let hiddenInput = document.querySelector('input[name="categories[]"][value="'+categoryId+'"]');

                if (hiddenInput) {
                    hiddenInput.remove();
                    this.classList.remove('selected');
                } else {
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
