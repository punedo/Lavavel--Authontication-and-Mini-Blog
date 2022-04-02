<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

Route::get('/', [\App\Http\Controllers\HomeController::class,'show_post'])->name('show_post');

Route::get('/post',[PostController::class,'index'])->middleware(['auth'])->name('post_index');
Route::post('/post',[PostController::class,'create'])->middleware(['auth'])->name('post_index');
Route::get('/post/edit/{id}',[PostController::class,'edit'])->middleware(['auth'])->name('edit_post');
Route::put('/post/edit/{id}',[PostController::class,'update'])->middleware(['auth'])->name('update_post');
Route::get('/post/delete/{id}',[PostController::class,'destroy'])->middleware(['auth'])->name('delete_post');



/*route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/

Route::get('dashboard',[\App\Http\Controllers\Dashboard::class,'show_post'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
