<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function SubCategory()
    {
        return $this->hasMany(Category::class);
    }
    public function productCategory()
    {
        return $this->hasMany(Product::class);
    }
}
