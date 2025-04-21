<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostsRequest;
use App\Http\Requests\UpdatePostsRequest;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();

        return view('dashboard', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create-posts');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostsRequest $request)
    {
        Post::create($request->validated());

        return redirect(route('home'))->with('message', 'post created');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $posts)
    {
        return view('edit-posts', ['post' => $posts]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostsRequest $request, Post $posts)
    {
        $posts->update($request->validated());

        return redirect(route('home'))->with('message', 'post updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $posts)
    {
        $posts->delete();

        return redirect(route('home'))->with('message', 'post deleted');
    }
}
