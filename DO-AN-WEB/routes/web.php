<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;


Route::get('/comment',[CommentController::class, 'index'])->name('comment.index');