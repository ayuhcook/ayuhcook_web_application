<?php

namespace App\Http\Middleware;

use App\Models\Recipe;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecipeOwnership
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $recipe_id = $request->route()->parameter('id');

        if(Recipe::find($recipe_id)) {
            $recipe_post_by = Recipe::find($recipe_id)->postBy;
            $user_id = Auth::user()->id;

            if($user_id != $recipe_post_by) {
                return abort(401);
            } else {
                return $next($request);
            }
        } else {
            return abort(404);
        }
    }
}
