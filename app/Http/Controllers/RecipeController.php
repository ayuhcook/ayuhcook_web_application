<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        return view('Recipe.index');
    }

    public function create()
    {
        return view('Recipe.create');
    }

    public function createIngredient()
    {
        return view('Recipe.ingredient');
    }

    public function createStep()
    {
        return view('Recipe.step');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('Recipe.show');
    }

    public function edit($id)
    {
        return view('Recipe.edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function showUserRecipe()
    {
        return view('Recipe.manage');
    }

    public function showBookmarkRecipe()
    {
        return view('Recipe.bookmark');
    }


    public function showCategory()
    {
        return view('Recipe.category');
    }

    public function category($category_name)
    {
        return view('Recipe.index');
    }

    public function validateRecipeForm()
    {
        // this is validation for the form
    }

    public function automationDeleteInformation()
    {
        // this is an automation function for delete the incomplete recipe
    }
}
