@extends('layouts.app')

@section('content')
<div class="flex flex-col items-center w-[100vw] mt-8">
    <h1>User Profile</h1>
    <div class="flex flex-col items-start rounded-xl bg-slate-50 p-4">
        <p>Name: <strong>{{ $user->name }}</strong></p>
        <p>Email: <strong>{{ $user->email }}</strong></p>
        <p>Created At: <strong>{{ $user->created_at->format('Y-m-d H:i:s') }}</strong></p>
    </div>
    <h2 class="mt-8 text-3xl">My Posts</h2>
</div>
@if($posts->isEmpty())
    <p>No posts available.</p>
@else
    @foreach($posts as $post)
        <li>
            <a href="{{ route('posts.show', $post->id) }}">
                <x-posts-component :post="$post" />
            </a>
        </li>
    @endforeach
@endif

@endsection
