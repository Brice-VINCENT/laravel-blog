<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return Inertia::render('Post', [
            'posts' => $posts,
        ]);
    }

    public function showById($id)
    {
        return Inertia::render('PostShowById', [
            'post' => Post::findorfail($id),
        ]);
    }

    public function show()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return Inertia::render('PostShow', [
            'posts' => $posts,
        ]);
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return true;
    }

    public function modifyView($id)
    {
        return Inertia::render('PostModify', [
            'post' => Post::findorfail($id),
        ]);
    }

    public function modify(Request $request, $id)
    {
        $post = Post::findorfail($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->image = $request->image;
        $post->category = $request->category;
        $post->save();
        return true;
    }

    public function createView()
    {
        return Inertia::render('PostCreate');
    }

    public function create(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->image = $request->image;
        $post->category = $request->category;
        $post->save();
        return true;
    }
}
