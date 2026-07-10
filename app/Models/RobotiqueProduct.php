<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RobotiqueProduct extends Model
{
    protected $table = 'robotique_products';
    protected $fillable = ['nomProduct', 'imgProduct', 'subCategory'];

    public function subcategory()
    {
        return $this->belongsTo(RobotiqueSubcategory::class, 'subCategory', 'id');
    }
}
