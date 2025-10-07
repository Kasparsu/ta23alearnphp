<?php

namespace App\Controllers;

use App\Models\User;

class AuthController
{
    public function registerForm()
    {
        setcookie('mycookie', 'Tasty', time() + 60 * 60 * 24 * 30);
        dump($_COOKIE);
        session_start();
        //$_SESSION['secret'] = 'shhhh';
        dump($_SESSION);

    }
}
