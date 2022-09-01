<?php

use App\Http\Controllers\BookController;
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

Route::middleware('auth')->group(function (){


    Route::prefix('admin')->name('admin.')->middleware('admin')->group(function (){
//        Posts
        Route::name('posts.')->group(function (){
            Route::get('posts/create' , [PostController::class , 'create'])->name('create');
            Route::post('posts/store' , [PostController::class , 'store'])->name('store');
        });

    });

    Route::get('posts' , [PostController::class , 'index'])->name('posts.index');
    Route::resource('books' , BookController::class);
    Route::get('post/{slug}' , [PostController::class , 'show'])->name('posts.show');

});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
