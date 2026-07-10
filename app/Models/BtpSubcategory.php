<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BtpSubcategory extends Model
{
    protected $fillable = ['nomSubCategory', 'category'];

    public function category()
    {
        return $this->belongsTo(BtpCategory::class, 'category', 'id');
    }

    public function products()
    {
        return $this->hasMany(BtpProduct::class, 'subCategory');
    }
}
