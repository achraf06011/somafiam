<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetallurgieSubcategory extends Model
{
    protected $fillable = ['nomSubCategory', 'category'];

    public function category()
    {
        return $this->belongsTo(MetallurgieCategory::class, 'Category', 'id');
    }

    public function products()
    {
        return $this->hasMany(MetallurgieProduct::class, 'subCategory');
    }

}