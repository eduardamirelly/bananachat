<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PageController;

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

Route::get('/ltemplate', function () {
    return Inertia::render('login_template');
});

Route::get('/rtemplate', function () {
    return Inertia::render('register_template');
});
