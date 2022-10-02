<?php

use App\Http\Controllers\Auth\LoginController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\RegisterController;

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
    $blogs = Post::all();
    return view('index',compact('blogs'));
});

Route::controller(PostController::class)->group(function(){
    Route::get('/contact','contact');
    Route::get('/about','about');
    Route::get('/blog','blog');
    Route::get('/delete_blog/{id}','delete');
    Route::get('/blogs/create','create');
    Route::post('/add_blog','add_blog');
    Route::get('/update/{id}','update');
    Route::PATCH('/update_blog/{id}','update_blog');
});
//register users
Route::controller(RegisterController::class)->group(function(){

    Route::get('/register','register');
    Route::post('/register_user','create');
});
//sign-in users
Route::controller(LoginController::class)->middleware(['authorized'])->group(function(){
    Route::get('/login','login');
    Route::any('/login_user','enter');
});
