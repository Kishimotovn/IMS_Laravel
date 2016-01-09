<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Post;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin', ['except' => 'show']);
        $this->middleware('auth');
    }

    function show($id) {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    function index()
    {
        $posts = Post::latest('id')->get();

        return view('posts.index', compact('posts'));
    }

    function create()
    {
        return view('posts.create');
    }

    function store(CreatePostRequest $request) {
        $post = new Post($request->all());

        Auth::user()->posts()->save($post);

        return redirect('posts');
    }

    function edit($id) {
        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));
    }

    function update(CreatePostRequest $request, $id) {
        $post = Post::findOrFail($id);

        $post->update($request->all());

        return redirect('posts');
    }
}
