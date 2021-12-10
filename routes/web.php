<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserRegisteredMail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Index do site
Route::get('/', [PageController::class, 'welcome'])->name('welcome');

//Para acessar precisa estar autenticado no sistema de usuários
Route::group(['middleware' => ['auth:sanctum', 'verified']], function(){
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
});


//Routes Temp (Tests Templates - VueJS)

//Rodar o código JS em tempo real no navegador
//npm run watch

Route::get('/ftemplate', function () {
    return Inertia::render('forgot_passaword');
});

Route::get('/rtemplate', function () {
    return Inertia::render('reset_password');
});

Route::get('/chat', function () {
    return Inertia::render('chat_dashboard');
});

Route::get('/email', function () {
    return new UserRegisteredMail();
});

Route::get('/welcome', function(){
    return Inertia::render('Welcome');
});

// Route::get('send', function () {
   
//     $details = [
//         'title' => 'Mail from ItSolutionStuff.com',
//         'body' => 'This is for testing email using smtp'
//     ];
   
//     Mail::to('bananachatsystem@gmail.com')->send(new UserRegisteredMail($details));
   
//     dd("Email is Sent.");
// });
