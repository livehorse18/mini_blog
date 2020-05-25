<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\HTTP\Request\User\StoreRequest;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with(['user'])->orderBy('created_at', 'desc')->get();

        return view('index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->fill($request->all());
        $post->user()->associate(Auth::user());
        $post->save();

        return redirect()->to('/'); // '/'にリダイレクト
    }

    public function destroy(Post $post)
    {
        abort(403);
        
        $post->delete();
    
        return redirect()->to('/');
    }
}
