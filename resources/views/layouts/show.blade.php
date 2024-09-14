<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

@extends('layouts.app')

@section('content')
    <x-posts-component :post="$post" />

    @foreach($post->comments as $comment)
        <x-comment-component :comment="$comment" :post="$post" />
    @endforeach
    <div class=" flex flex-col justify-center items-center mb-4 w-[100vw]">
        <div class="flex rounded-2xl min-w-[60vw] max-w-[60vw]">
            <form class="flex items-center" action="{{ route('posts.comments.store', $post) }}" method="POST">
                @csrf
                <textarea class=" border-2 border-blue-500 rounded-xl p-4" name="content" placeholder="Write a comment here" required></textarea>
                <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </button>
            </form>
        </div>
    </div>
@endsection
