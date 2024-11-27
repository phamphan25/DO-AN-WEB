<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactInfoController;
use App\Http\Controllers\ContactInquiryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\productController;
use App\Http\Controllers\DashboardController;

Route::view('','layout.layout');
Route::get('/comment',[CommentController::class, 'index'])->name('comments.index');
Route::patch('/comments/{id}/status', [CommentController::class, 'updateStatus'])->name('comments.updateStatus');
Route::get('/comments/edit/{comment}', [CommentController::class, 'edit'])->name('comments.edit');
Route::put('/comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');

Route::get('/contact', [ContactInfoController::class, 'index'])->name('contact.index');
Route::put('/contact', [ContactInfoController::class, 'update'])->name('contact.update');

Route::get('/contact/inquiries', [ContactInquiryController::class, 'showInquiries'])->name('contact.inquiries');
Route::delete('/inquiries/{inquiry}', [ContactInquiryController::class, 'destroy'])->name('inquiries.destroy');


Route::get('/order',[OrderController::class, 'index'])->name('order.index');
Route::delete('/order/{order_id}', [OrderController::class, 'destroy'])->name('orders.destroy');
Route::put('/order/{order_id}', [OrderController::class, 'update'])->name('orders.update');
Route::get('/orders', [OrderController::class, 'edit'])->name('orders.index');
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');

Route::put('/orders/{order_id}', [OrderController::class, 'update'])->name('order.update');

Route::get('/product', [productcontroller::class, 'index'])->name('product.index');
Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
Route::get('/index',[DashboardController::class, 'ShowDashboard'])->name('dashboard.index');
Route::get('/totalCustomer',[DashboardController::class, 'getTotalCustomers'])->name('total.index');