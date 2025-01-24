<?php

use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\FontController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubCateoryController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified', 'role:admin'])->group(function () {
    Route::get('/dashboard', [ProfileController::class, 'dashboard'])->name('dashboard');
    Route::withoutMiddleware('role:admin')->middleware('role:user|admin')->group(function() {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
    Route::resource('user', UserController::class);
    Route::resource('role', RoleController::class);
    Route::resource('permission', PermissionController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('subcategory', SubCateoryController::class);
    Route::resource('collection', CollectionController::class);
    Route::resource('product', ProductController::class);
    Route::resource('font', FontController::class);
    Route::get('/get/subcategory', [ProductController::class, 'getsubcategory'])->name('getsubcategory');
    Route::get('/remove-external-img/{id}', [ProductController::class, 'removeImage'])->name('remove.image');
    Route::prefix('orders')->name('orders.')->group(function() {
        Route::get('', [OrderController::class, 'index'])->name('index');
    });
    Route::resource('blogCategories', BlogCategoryController::class);
    Route::resource('tags', TagController::class);
    Route::resource('blogs', BlogController::class);
});
