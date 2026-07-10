<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManutentionProduct extends Model
{
    protected $fillable = ['nomProduct', 'imgProduct', 'description', 'caracteristiques', 'typeMachine', 'subCategory'];

    public function subCategory()
    {
        return $this->belongsTo(ManutentionSubcategory::class, 'subCategory');
    }
}
