<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RobotiqueSubcategory extends Model
{
    protected $table = 'robotique_subcategories';
    protected $fillable = ['nomSubCategory', 'imgSubCategory', 'description', 'category', 'ordre'];
}
