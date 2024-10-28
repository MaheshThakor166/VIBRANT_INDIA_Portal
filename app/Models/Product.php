<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Specify the fields that can be mass-assigned
    protected $fillable = [
        'name',
        'description',
       'material', 
        'size'  ,
        'image_url',
        'subcategory_id',
        'category_type'
        
    ];

    // Relationship to Subcategory
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    // Relationship to Category through Subcategory
    public function category()
    {
        return $this->hasOneThrough(Category::class, Subcategory::class, 'id', 'id', 'subcategory_id', 'category_id');
    }
}
