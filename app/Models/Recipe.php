<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'description',
        'servings',
        'preparation_time',
        'level',
        'post_by',
        'publicity',
    ];

    public function ingredients() {
        return $this->hasMany(Ingredient::class, 'recipe_id');
    }

    public function steps() {
        return $this->hasMany(Step::class, 'recipe_id');
    }

    public function stars() {
        return $this->hasMany(Star::class, 'recipe_id')->count('id');
    }

    public function bookmarkCount() {
        return $this->hasMany(Bookmark::class, 'recipe_id')->count('id');
    }
}
