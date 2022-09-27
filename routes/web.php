<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
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
