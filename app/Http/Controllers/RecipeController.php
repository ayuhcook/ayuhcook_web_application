<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function createIngredient($id)
    {
        $recipe = Recipe::find($id);

        $ingredients = Recipe::find($id)->ingredients;

        return view('Recipe.ingredient', compact('recipe', 'ingredients'));
    }

    public function createStep($id)
    {
        $recipe = Recipe::find($id);

        $ingredients = Recipe::find($id)->ingredients;

        $steps = Recipe::find($id)->steps;

        return view('Recipe.step', compact('recipe', 'ingredients', 'steps'));
    }

    public function store(Request $request)
    {
        $this->validateRecipeForm($request, 'recipe');


        $user_id = Auth::user()->id;

        // initiate the variable
        $image_1 = null;
        $image_2 = null;
        $image_3 = null;

        if ($request->image_1){
            $path = $request->file('image_1')->storePublicly('/public');
            $filename = pathinfo($path)['basename'];
            $image_1 = $filename;
        }
        if ($request->image_2){
            $path = $request->file('image_2')->storePublicly('/public');
            $filename = pathinfo($path)['basename'];
            $image_2 = $filename;
        }
        if ($request->image_3){
            $path = $request->file('image_3')->storePublicly('/public');
            $filename = pathinfo($path)['basename'];
            $image_3 = $filename;
        }

        $credentials = [
            'name' => $request->name,
            'preparation_time' => $request->preparation_time,
            'servings' => $request->servings,
            'level' => $request->level,
            'category' => $request->category,
            'image_1' => $image_1,
            'image_2' => $image_2,
            'image_3' => $image_3,
            'post_by' => $user_id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        $id = Recipe::insertGetId($credentials);

        return redirect('recipe/create/'.$id.'/ingredient');
    }

    public function storeIngredient(Request $request)
    {
        $this->validateRecipeForm($request, 'ingredients');

        $credentials = [

        ];
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

    public function imageResizer()
    {
        //
    }

    public function validateRecipeForm($request, $part)
    {
        switch ($part) {
            case 'recipe':
                return $request->validate([
                    'name' => 'required|max:255',
                    'image_1' => 'required|mimes:png,jpg,jpeg|max:8192',
                    'image_2' => 'mimes:png,jpg,jpeg|size:3000',
                    'image_3' => 'mimes:png,jpg,jpeg|size:3000',
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
        // triggered at user opening and expired at certain date with including the dependencies
    }
}
