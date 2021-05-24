<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/posts',[PostController::class,"index"])->middleware(['auth'])->name('posts.index');
Route::get('/posts/create',[PostController::class,"create"])->middleware(['auth'])->name('posts.create');
Route::get('/posts/{post}',[PostController::class,"show"])->middleware(['auth'])->name('posts.show');
Route::post('/posts/store',[PostController::class,"store"])->middleware(['auth'])->name('posts.store');
Route::get('/posts/{post}/edit',[PostController::class,"edit"])->middleware(['auth'])->name('posts.edit');
Route::put('/posts/{post}',[PostController::class,"update"])->middleware(['auth'])->name('posts.update');
Route::delete('/posts/{post}',[PostController::class,"destroy"])->middleware(['auth'])->name('posts.destroy');



require __DIR__.'/auth.php';
