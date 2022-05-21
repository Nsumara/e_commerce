<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function SubCategories()
    {
        return $this->hasMany(Category::class,'subcategories_id','id');
    }
    public function products()
    {
        return $this->hasMany(Product::class,'product_id','id');
    }
}
