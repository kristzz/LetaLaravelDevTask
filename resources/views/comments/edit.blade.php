@extends('layouts.app')

@section('content')
    <div class="flex flex-col justify-center items-center mb-4 w-[100vw]">
        <div class="flex rounded-2xl min-w-[60vw] max-w-[60vw]">
            <form class="flex items-center flex-col w-full" action="{{ route('posts.comments.update', [$comment->post, $comment]) }}" method="POST">
                @csrf
                @method('PUT')

                <textarea class="border-2 border-blue-500 rounded-xl p-4 w-full mt-8" name="content" placeholder="Edit your comment" required>{{ $comment->content }}</textarea>

                <button type="submit" class="ml-2 mt-2 bg-blue-500 text-white p-2 min-w-32 rounded-xl">
                    Submit
                </button>
            </form>
        </div>
    </div>

@endsection
