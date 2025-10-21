<?php

namespace App\Controllers;

use App\DB;
use App\Models\Post;
use App\Models\User;

class PostsController
{
    public function __construct()
    {  
       if(!auth()){
        redirect('/login');
        die;
       } 
    }

    public function index()
    {
       $posts = Post::all();
       view('posts/index', compact('posts'));
    }

    public function create() {
        view('posts/create');
    }

    public function store() {
        dd($_FILES, $_POST);
        $from = $_FILES['image']['tmp_name'];
        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        do {
            $name = md5($_FILES['image']['name'] . microtime() . rand(PHP_INT_MIN, PHP_INT_MAX)) . '.' . $ext;
        } while(file_exists(__DIR__ . '/../../public/uploads/' . $name));
        $to = __DIR__ . '/../../public/uploads/' . $name;
        move_uploaded_file($from, $to);

        dd($_FILES, $_POST);
        $post = new Post();
        $post->title = $_POST['title'];
        $post->body = $_POST['body'];
        $post->save();
        redirect('/posts');
    }

    public function view() {
        $post = Post::find($_GET['id']);
        view('posts/view', compact('post'));
    }

    public function edit() {
        $post = Post::find($_GET['id']);
        view('posts/edit', compact('post'));
    }

    public function update() {
        $post = Post::find($_GET['id']);
        $post->title = $_POST['title'];
        $post->body = $_POST['body'];
        $post->save();
        redirect('/posts');
    }

    public function destroy() {
        $post = Post::find($_GET['id']);
        $post->delete();
        redirect('/posts');
    }
}
