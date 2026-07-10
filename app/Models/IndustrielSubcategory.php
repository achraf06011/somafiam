<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndustrielSubcategory extends Model
{
    protected $fillable = ['nomSubCategory', 'category'];

    public function category()
    {
        return $this->belongsTo(IndustrielCategory::class, 'Category', 'id');
    }

    public function products()
    {
        return $this->hasMany(IndustrielProduct::class, 'subCategory');
    }

}