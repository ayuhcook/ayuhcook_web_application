<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/**
 * Guest and Main Section
 */

Route::get('/', [HomeController::class, 'index']);
Route::get('/recipes', [RecipeController::class, 'index']);
Route::get('/recipes/{id}', [RecipeController::class, 'show']);

Route::get('/category', [RecipeController::class, 'showCategory']);
Route::get('/category/{category_name}', [RecipeController::class, 'category']);

Route::get('/sign-in', [AuthenticationController::class, 'showSignInForm']);
Route::post('/sign-in', [AuthenticationController::class, 'signIn']);
Route::get('/sign-out', [AuthenticationController::class, 'signOut']);

Route::get('/register', [UserController::class, 'create']);
Route::post('/register', [UserController::class, 'store']);

Route::get('/forget-password', [HomeController::class, 'index']);
Route::post('/reset-password', [UserController::class, 'resetPassword']);


/**
 * User Section and Recipe Configuration
 */

Route::get('/profile/{id}', [UserController::class, 'show']);

Route::get('/profile/{id}/edit', [UserController::class, 'edit']);
Route::patch('/profile/{id}', [UserController::class, 'update']);
Route::patch('/update-password/{id}', [UserController::class, 'updatePassword']);
Route::patch('/update-profile-image/{id}', [UserController::class, 'updateProfileImage']);

Route::get('/my-bookmark', [RecipeController::class, 'showBookmarkRecipe']);

Route::get('/my-recipe-repository', [RecipeController::class, 'showUserRecipe']);
Route::get('/recipes/{id}/edit', [RecipeController::class, 'edit']);

Route::get('/recipe/create', [RecipeController::class, 'create']);
Route::post('/recipe/create', [RecipeController::class, 'store']);
Route::patch('/recipe/create', [RecipeController::class, 'store']);

Route::get('/recipe/create/ingredient', [RecipeController::class, 'createIngredient']);
Route::get('/recipe/create/step', [RecipeController::class, 'createStep']);

/**
 * Update, Notification, Disclaimer and Dev Info
 */

Route::get('/about-us', [HomeController::class, 'aboutUs']);
Route::get('/support-us', [HomeController::class, 'supportUs']);
Route::get('/express-your-idea', [HomeController::class, 'feedbackForm']);
Route::get('/notification-and-info', [HomeController::class, 'notification']);
