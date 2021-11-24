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

    public function emailSend(){
        
    }

}
