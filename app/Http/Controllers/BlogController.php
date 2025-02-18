<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * display the blog posts.
     */
    public function index()
    {
        return view('blog.index', [
            'blogs' => Blog::all()
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $blog = Blog::create($validated);
        return redirect('/blog');
    }

    public function show(Blog $blog)
    {
        return view('blog.show', [
            'blog' => $blog
        ]);
    }

    public function edit(Blog $blog)
    {
        return view('blog.edit', [
            'blog' => $blog
        ]);
    }
}
