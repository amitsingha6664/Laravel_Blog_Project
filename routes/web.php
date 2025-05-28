<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SettingController;

// Frontend Routes

Route::get('/', [blogController::class, 'home'])->name('home');
Route::get('category', [blogController::class, 'category'])->name('category');
Route::get('articale', [blogController::class, 'articale'])->name('articale');
Route::get('about', [blogController::class, 'about'])->name('about');
Route::get('contact', [blogController::class, 'contact'])->name('contact');

// Backend Admin Routes

Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('CreatePostView', [AdminController::class, 'CreatePostView'])->name('CreatePostView');
Route::post('CreatePost', [AdminController::class, 'CreatePost'])->name('CreatePost');
Route::get('ViewPost/{slug}', [AdminController::class, 'ViewPost'])->name('ViewPost');
Route::get('EditPost/{slug}', [AdminController::class, 'EditPost'])->name('EditPost');
Route::post('EditUpdate', [AdminController::class, 'EditUpdate'])->name('EditUpdate');
Route::get('DeletePost/{post_id}', [AdminController::class, 'DeletePost'])->name('DeletePost');
Route::get('SuccessView', [AdminController::class, 'SuccessView'])->name('SuccessView');

// Backend Settings Routes

Route::get('GeneralSettingsView', [SettingController::class, 'GeneralSettingsView'])->name('GeneralSettingsView');
Route::get('ProfileSettingsView', [SettingController::class, 'ProfileSettingsView'])->name('ProfileSettingsView');
Route::get('AddCategoryView', [SettingController::class, 'AddCategoryView'])->name('AddCategoryView');
Route::post('AddCategory', [SettingController::class, 'AddCategory'])->name('AddCategory');
Route::get('test', [SettingController::class, 'test'])->name('test');