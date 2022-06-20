<?php

namespace App\Http\Controllers;

use App\Models\User;
use Core\Helpers\Redirector;
use Core\Session;
use Core\Validator;
use Core\View;

class AuthController{
    public function loginForm(){
        if (User::isLoggedIn()){
            Redirector::redirect('/home');
        }
        View::render('auth/login');
    }
}