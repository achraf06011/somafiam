<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RobotiqueCategory extends Model
{
    protected $table = 'robotique_categories';
    protected $fillable = ['nomCategory', 'imgCategory', 'ordre'];

    public function subcategories()
    {
        return $this->hasMany(RobotiqueSubcategory::class, 'category', 'id')->orderBy('ordre');
    }
}
