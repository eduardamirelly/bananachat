<?php

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

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

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::get('/register', function () {
    return view('pages.register');
})->name('register');

Route::get('/resend', function () {
    return view('pages.resend-email');
})->name('resend-mail');

Route::get('/forgot', function () {
    return view('pages.forgot-password');
})->name('forgot');

Route::get('/reset', function () {
    return view('pages.reset-password');
})->name('reset');

//Route::get('/chat', [MessageController::class, 'list_messages'])->name('chat');
//Route::get('/chat/message/create', [MessageController::class, 'create_message'])->name('create-message');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function(){
    Route::get('/dashboard', [MessageController::class, 'list_messages'])->name('dashboard');
    Route::get('/dashboard/message/create', [MessageController::class, 'create_message'])->name('create-message');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
