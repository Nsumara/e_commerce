<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $guarded = [];


    public function product()
    {
        return $this->belongsTo(User::class);
    }
    public function products()
    {
        return $this->belongsTo(Category::class);
    }
    public function productitem()
    {
        return $this->belongsTo(SubCategory::class);
    }
    public function pro()
    {
        return $this->hasMany(OrderItem::class);
    }
   
}
