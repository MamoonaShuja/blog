<?php

use App\Http\Controllers\PostController;
use App\Models\CustomPost;
use Illuminate\Support\Facades\Route;

Route::resource('posts' , PostController::class)->except(['show']);
