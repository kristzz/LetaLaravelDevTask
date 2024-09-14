<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
</head>
<body>
    <h1>User Profile</h1>

    <p><strong>Name:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Created At:</strong> {{ $user->created_at->format('Y-m-d H:i:s') }}</p>
    
    <h2>My Posts</h2>
    @if($posts->isEmpty())
        <p>No posts available.</p>
    @else
        <ul>
            @foreach($posts as $post)
                <li>
                    <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                    <p>{{ $post->content }}</p>
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
