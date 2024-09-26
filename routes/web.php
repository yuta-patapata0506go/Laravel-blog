<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;



Auth::routes();



Route::group(["middleware" => "auth"], function () { //i need users to login first to access my routes inside this blog
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

  
    Route::get('/create',[PostController::class,'create'])->name('post.create');
    Route::post('/store',[PostController::class,'store'])->name('post.store');
    Route::get('/show/{id}',[PostController::class,'show'])->name('post.show');
    Route::get('post/{id}/edit',[PostController::class,'edit'])->name('post.edit');
    Route::delete('post/{id}',[PostController::class,'destroy'])->name('post.destroy');
    Route::patch('post/{id}',[PostController::class,'update'])->name('post.update');
    Route::group(['middleware' => ['auth']], function () {
      Route::get('/post/{id}/profile', [PostController::class, 'profile'])->name('post.profile');
    });
        
        
        Route::patch('/post/{id}', [PostController::class, 'update'])->name('post.update');
    

    Route::post('/comment/{post_id}',[CommentController::class,'store'])->name('comment.store');
    Route::delete('/comment/{id}',[CommentController::class,'destroy'])->name('comment.destroy');
    


});
