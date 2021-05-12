<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    use HasFactory;

    protected $fillable = [
        'recipe_id',
        'step',
        'note',
        'image_1',
        'image_2',
        'image_3',
    ];
}
