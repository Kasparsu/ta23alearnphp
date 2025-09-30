<?php

namespace App\Controllers;

use App\DB;

class PostsController
{
    public function index()
    {
       $db = new DB();
       $posts = $db->all('posts');
       dump($posts);
       $users = $db->all('users');
       dump($users);
    }
}
