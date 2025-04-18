<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

Route::prefix('v1')->group(function () {
    // API 1: Create Recipe (POST)
    Route::post('/recipes', [RecipeController::class, 'store']);

    // API 2: Fetch All Recipes (GET)
    Route::get('/recipes', [RecipeController::class, 'index']);

    // API 3: Fetch One Recipe (GET)
    Route::get('/recipes/{id}', [RecipeController::class, 'show']);
});
