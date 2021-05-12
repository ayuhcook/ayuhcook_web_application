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
Route::get('/recipe/create', [RecipeController::class, 'create']);
Route::get('/recipe/create/ingredient', [RecipeController::class, 'createIngredient']);
Route::get('/recipe/create/step', [RecipeController::class, 'createStep']);

Route::get('/category', [RecipeController::class, 'showCategory']);
Route::get('/category/{category_name}', [RecipeController::class, 'category']);

Route::get('/sign-in', [AuthenticationController::class, 'showSignInForm']);
Route::post('/sign-in', [AuthenticationController::class, 'signIn']);
Route::post('/sign-out', [AuthenticationController::class, 'signOut']);

Route::get('/register', [UserController::class, 'index']);
Route::post('/register', [UserController::class, 'create']);

Route::get('/forget-password', [HomeController::class, 'index']);
Route::post('/reset-password', [UserController::class, 'resetPassword']);


/**
 * User Section
 */

Route::get('/profile/{id}', [UserController::class, 'show']);
Route::get('/profile/{id}/edit', [UserController::class, 'edit']);
Route::patch('/profile/{id}', [UserController::class, 'update']);

Route::get('/my-recipe-repository', [RecipeController::class, 'showUserRecipe']);
Route::get('/recipes/{id}/edit', [RecipeController::class, 'edit']);
