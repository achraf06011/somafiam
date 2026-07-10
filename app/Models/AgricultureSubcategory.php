<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgricultureSubcategory extends Model
{
    protected $fillable = ['nomSubCategory', 'category'];

    public function category()
    {
        return $this->belongsTo(AgricultureCategory::class, 'Category', 'id');
    }

    public function products()
    {
        return $this->hasMany(AgricultureProduct::class, 'subCategory');
    }

}