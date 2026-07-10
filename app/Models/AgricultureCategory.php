<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgricultureCategory extends Model
{
    protected $fillable = ['nomCategory,imgCategory'];

    public function subcategories()
    {
        return $this->hasMany(AgricultureSubcategory::class, 'category', 'id');
    }
}
