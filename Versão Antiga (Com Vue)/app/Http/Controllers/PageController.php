<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

class PageController extends Controller
{
    //

    public function welcome(){
        return Inertia::render('Welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION, //deletar depois
            'phpVersion' => PHP_VERSION, //deletar depois
        ]);
    }

    public function dashboard(){
        return Inertia::render('Dashboard');
    }

    public function login_user(){
        return Inertia::render('login_template');
    }

    public function register_user(){
        return Inertia::render('register_template');
    }

    public function forgot_password_user(){
        return Inertia::render('forgot_password');
    }

    public function resend_email_user(){
        return Inertia::render('resend_email');
    }

    public function reset_password_user(){
        return Inertia::render('reset_password');
    }

    public function chat(){
        return Inertia::render('chat_dashboard');
    }

}
