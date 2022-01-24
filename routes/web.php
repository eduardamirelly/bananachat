<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/chatui', function(){
    return view('pages.sidebar-contactdata');
});


Route::middleware(['auth'])->group(function (){
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

    Route::post('send-message', [MessageController::class, 'sendMessage'])->name('message.send-message');
    Route::get('chat/{userId}', [MessageController::class, 'chat'])->name('message.chat');

});

//lembra de pôr o verified

require __DIR__.'/auth.php';
