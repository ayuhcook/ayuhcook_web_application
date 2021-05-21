<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

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
        $this->validateRecipeForm($request, 'recipe');

        // initiate the variable
        $image_1 = null;
        $image_2 = null;
        $image_3 = null;

        $credentials = [
            'name' => $request->name,
            'preparation_time' => $request->preparation_time,
            'servings' => $request->servings,
            'level' => $request->level,
            'category' => $request->category,
            'image_1' => $image_1,
            'image_2' => $image_2,
            'image_3' => $image_3,
        ];

        dd($credentials);
    }

    public function storeIngredient(Request $request)
    {
        //
    }

    public function storeCookingStep(Request $request)
    {
        //
    }

    public function completeRecipe(Request $request)
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

    public function validateRecipeForm($request, $part)
    {
        switch ($part) {
            case 'recipe':
                return $request->validate([
                    'name' => 'required|max:255',
                    'image_1' => 'required|mimes:png,jpg,jpeg',
                    'image_2' => 'mimes:png,jpg,jpeg',
                    'image_3' => 'mimes:png,jpg,jpeg',
                    'description' => 'max:500',
                    'servings' => 'required|integer',
                    'preparation_time' => 'required|integer',
                    'level' => 'required',
                    'category' => 'required',
                ]);
                break;

            case 'ingredients':
                return $request->validate([
                    'name' => 'required|max:255',
                ]);
                break;

            case 'steps':
                return $request->validate([
                    'name' => 'required|max:255',
                ]);
                break;

            default:
                // return nothing
                break;
        }
    }

    public function automationDeleteInformation()
    {
        // this is an automation function for delete the incomplete recipe
    }
}
