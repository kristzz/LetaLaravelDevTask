<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $user = Auth::user();
        
        $posts = Post::where('user_id', $user->id)->get();
        
        return view('layouts.profile', compact('user', 'posts'));
    }
}

