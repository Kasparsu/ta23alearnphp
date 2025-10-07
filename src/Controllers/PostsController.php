<?php

namespace App\Controllers;

use App\DB;
use App\Models\Post;
use App\Models\User;

class PostsController
{
    public function index()
    {
       $posts = Post::all();
       view('posts/index', compact('posts'));
    }

    public function create() {
        view('posts/create');
    }

    public function store() {
        $post = new Post();
        $post->title = $_POST['title'];
        $post->body = $_POST['body'];
        $post->save();
        header('Location: /posts');
    }
}
