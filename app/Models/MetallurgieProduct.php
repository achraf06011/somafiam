<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetallurgieProduct extends Model
{
    protected $fillable = ['nomProduct', 'imgProduct', 'description', 'subCategory'];

    public function subCategory()
    {
        return $this->belongsTo(MetallurgieSubcategory::class, 'subCategory');
    }
}
