<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MinesSubcategory extends Model
{
    protected $fillable = ['nomSubCategory', 'category'];

    public function category()
    {
        return $this->belongsTo(MinesCategory::class, 'category', 'id');
    }

    public function products()
    {
        return $this->hasMany(MinesProduct::class, 'subCategory');
    }
}
