<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = []; 

    public function user(){
        return $this->belongsToMany(User::class,'user_id','id');
    }
    public function payment()
    {
        return $this->belongsTo(Payment::class,'order_id','id');
    }
}
