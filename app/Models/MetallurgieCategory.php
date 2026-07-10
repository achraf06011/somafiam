<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetallurgieCategory extends Model
{
    protected $fillable = ['nomCategory,imgCategory'];

    public function subcategories()
    {
        return $this->hasMany(MetallurgieSubcategory::class, 'category', 'id');
    }
}
