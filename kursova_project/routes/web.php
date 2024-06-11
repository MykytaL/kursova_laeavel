<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/zhanry', function () {
    return view('zhanry');
});

Route::get('/golovna', function () {
    return view('golovna');
});

Route::get('/fentesi', function () {
    return view('fentesi');
});

Route::get('/HarryPotter', function () {
    return view('HarryPotter');
});

Route::post('/HarryPotter', [PostController::class, 'Submit']);

Route::get('/HarryPotter', [PostController::class, 'Output']);

Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('post.destroy');

Route::get('/HarryPotter/{id}/edit', [PostController::class, 'edit'])->name('post.edit');

Route::put('/HarryPotter/{id}', [PostController::class, 'update'])->name('post.update');

Route::get('/posts', [PostController::class, 'index'])->name('post.index');
