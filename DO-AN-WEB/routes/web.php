<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactInfoController;
use App\Http\Controllers\ContactInquiryController;


Route::get('/comment',[CommentController::class, 'index'])->name('comments.index');
Route::patch('/comments/{id}/status', [CommentController::class, 'updateStatus'])->name('comments.updateStatus');
Route::get('/comments/edit/{comment}', [CommentController::class, 'edit'])->name('comments.edit');
Route::put('/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');

Route::get('/contact', [ContactInfoController::class, 'index'])->name('contact.index');
Route::put('/contact', [ContactInfoController::class, 'update'])->name('contact.update');

Route::get('/contact/inquiries', [ContactInquiryController::class, 'showInquiries'])->name('contact.inquiries');
Route::delete('/inquiries/{inquiry}', [ContactInquiryController::class, 'destroy'])->name('inquiries.destroy');