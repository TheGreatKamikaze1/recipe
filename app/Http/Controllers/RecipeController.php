<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    // API 1: CREATE RECIPE (POST)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'ingredients' => 'required|string|min:10',
            'steps' => 'required|string|min:10'
        ]);
    
 
    
        $recipe = Recipe::create($validated);
        return response()->json($recipe, 201);
    }

    // API 2: FETCH ALL RECIPES (GET)
    public function index()
    {
        $recipes = Recipe::all();
        return response()->json($recipes);
    }

    // API 3: FETCH ONE RECIPE (GET)
    public function show($id)
    {
        $recipe = Recipe::findOrFail($id);
        return response()->json($recipe);
    }
}