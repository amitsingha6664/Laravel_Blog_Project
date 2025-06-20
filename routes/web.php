<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SettingController;

// Frontend Routes

Route::get('/', [blogController::class, 'Home'])->name('Home');
Route::get('Category', [blogController::class, 'Category'])->name('Category');
Route::get('Articale', [blogController::class, 'Articale'])->name('Articale');
Route::get('About', [blogController::class, 'About'])->name('About');
Route::get('Contact', [blogController::class, 'Contact'])->name('Contact');

// Backend Admin Routes

Route::get('Dashboard', [AdminController::class, 'Dashboard'])->name('Dashboard');
Route::get('CreatePostView', [AdminController::class, 'Create_Post_View'])->name('Create-Post-View');
Route::post('CreatePost', [AdminController::class, 'Create_Post'])->name('Create-Post');
Route::get('ViewPost/{slug}', [AdminController::class, 'View_Post'])->name('View-Post');
Route::get('EditPost/{slug}', [AdminController::class, 'Edit_Post'])->name('Edit-Post');
Route::post('EditUpdate', [AdminController::class, 'Edit_Update'])->name('Edit-Update');
Route::get('DeletePost/{post_id}', [AdminController::class, 'Delete_Post'])->name('Delete-Post');

// Backend Settings Routes

Route::get('GeneralSettingsView', [SettingController::class, 'General_Settings_View'])->name('General-Settings-View');
Route::get('UsersListView', [SettingController::class, 'Users_List_View'])->name('Users-List-View');
Route::get('AddNewUser', [SettingController::class, 'Add_New_User'])->name('Add-New-User');
Route::post('UserCreate', [SettingController::class, 'User_Create'])->name('User-Create');
Route::get('DeleteUser/{user_id}', [SettingController::class, 'Delete_User'])->name('Delete-User');
Route::get('UserProfileView/{user_id}', [SettingController::class, 'User_Profile_View'])->name('User-Profile-View');
Route::get('ProfileSettingsView', [SettingController::class, 'Profile_Settings_View'])->name('Profile-Settings-View');
Route::get('EditProfileView', [SettingController::class, 'Edit_Profile_View'])->name('Edit-Profile-View');
Route::get('AddCategoryView', [SettingController::class, 'Add_Category_View'])->name('Add-Category-View');
Route::post('AddCategory', [SettingController::class, 'Add_Category'])->name('Add-Category');