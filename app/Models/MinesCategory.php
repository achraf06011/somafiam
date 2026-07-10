<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MinesCategory extends Model
{
    protected $fillable = ['nomCategory', 'imgCategory', 'ordre'];

    public function subcategories()
    {
        return $this->hasMany(MinesSubcategory::class, 'category', 'id');
    }
}
