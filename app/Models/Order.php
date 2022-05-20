<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = []; 

    public function users(){
        return $this->belongsToMany(User::class);
    }
    public function order()
    {
        return $this->belongsTo(Payment::class);
    }
}
