@extends('layouts.app')

@section('content')
<div class="flex flex-col items-center w-[100vw] mt-8">
    <h1>User Profile</h1>
    <div class="flex flex-col items-start">
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
        <x-posts-component :post="$post" />
    @endforeach
@endif

@endsection
