<?php

namespace App\Models;

use App\Http\Controllers\CartController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

}
