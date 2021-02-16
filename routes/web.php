<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Database\Seeders\PostSeeder;
use PhpParser\Node\Expr\FuncCall;

Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/{post}',[PostController::class,'show'])->name('posts.show');
Route::get('category/{category}',[PostController::class, 'category'])->name('posts.category');
Route::get('tag/{tag}', [PostController::class, 'tag'])->name('posts.tag');

//Route::get('/', function () {return view('welcome');});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
