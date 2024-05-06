<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Inertia\Inertia;

Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/post/create', [PostController::class, 'createView'])->name('posts.create.view');
Route::post('/post/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/post/{id}', [PostController::class, 'showById'])->name('posts.show.id');
Route::get('/post', [PostController::class, 'show'])->name('posts.show');
Route::delete('/post/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/post/modify/{id}', [PostController::class, 'modifyView'])->name('posts.modify.view');
Route::put('/post/modify/{id}', [PostController::class, 'modify'])->name('posts.update');

Route::middleware('auth')->group(function () {
    Route::get('/account', function () {
        return Inertia::render('Account');
    })->name('account');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
