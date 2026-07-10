<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManutentionSubcategory extends Model
{
    protected $fillable = ['nomSubCategory', 'category'];

    public function category()
    {
        return $this->belongsTo(ManutentionCategory::class, 'category', 'id');
    }

    public function products()
    {
        return $this->hasMany(ManutentionProduct::class, 'subCategory');
    }
}
