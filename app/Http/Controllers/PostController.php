<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::all()
    ]);
    }
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post = Post::create($validated);
        return redirect('/posts');
    }
    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function edit(Post $post)
    {
        return view('posts.edit', [
            'post' => $post
        ]);
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post->update($validated);

        return redirect('/posts')
            ->with('success', 'Post updated successfully');
    }

    public function delete(Post $post) {
        return view('posts.delete', [
            'post' => $post
        ]);
    }

    public function destroy(Post $post) {
        $post->delete();
        return redirect('/posts')
            ->with('success', 'Post deleted successfully');
    }
}
