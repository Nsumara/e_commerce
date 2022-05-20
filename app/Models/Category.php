<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

protected $guarded=[];

    public function category()
    {
        return $this->belongsTo(User::class);
    }
    public function itemCategory()
    {
        return $this->hasMany(SubCategory::class);
    }
}
