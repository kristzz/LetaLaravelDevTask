@extends('layouts.app')

@section('content')
    <div class="flex flex-col justify-center items-center my-4 w-[100vw]">
        <div class="flex flex-col border-l-2 border-t-2 border-blue-300 bg-slate-50 rounded-2xl min-w-[60vw] max-w-[60vw] p-4">
            <h1 class="mb-2"><strong>Edit Post</strong></h1>
            <form action="{{ route('posts.update', $post->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="flex items-center">
                    <label for="title">Title</label>
                    <input class="ml-4 border-2 border-blue-500 rounded-xl p-2" type="text" name="title" id="title" value="{{ $post->title }}">
                </div>

                <div class="flex items-center mt-2">
                    <label for="content">Content</label>
                    <textarea class="ml-4 border-2 border-blue-500 rounded-xl p-2" name="content" id="content">{{ $post->content }}</textarea>
                </div>

                <div class="mt-2">
                    <label>Categories</label>
                    <div id="category-buttons">
                        @foreach($categories as $category)
                            <button type="button"
                                    class="category-btn rounded-xl {{ in_array($category->id, $post->categories->pluck('id')->toArray()) ? 'selected' : '' }}"
                                    data-category-id="{{ $category->id }}">
                                {{ $category->name }}
                            </button>
                            @if (in_array($category->id, $post->categories->pluck('id')->toArray()))
                                <input type="hidden" name="categories[]" value="{{ $category->id }}">
                            @endif
                        @endforeach
                    </div>
                </div>
                <button class="rounded-xl bg-blue-500 text-white w-28 p-2 text-center mt-4" type="submit">Update Post</button>
            </form>
        </div>
    </div>
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
            padding: 4px;
            border: 1px solid #ccc;
            cursor: pointer;
            background-color: #f0f0f0;
        }

        .category-btn.selected {
            background-color: #3b82f6;
            color: white;
            border-color: #3b82f6;
        }
    </style>
@endsection
