<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index($category = null)
    {
        if (isset($category)) {
            $cat = ucfirst($category);
            $posts = Post::where('category', $cat)
                ->get()
                ->sortByDesc('posted_at');
        } else {
            $posts = Post::all()->sortByDesc('posted_at');
        }

        return view('blog', ['posts' => $posts]);
    }

    public function show($postId)
    {
        $post = Post::where('id', $postId)
            ->first();

        $tags = json_decode($post->tags);

        return view('post', ['post' => $post, 'tags' => $tags]);
    }
}
