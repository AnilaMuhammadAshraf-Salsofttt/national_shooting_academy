<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;

    protected $fillable = ['order_id','product_id','unit_price','quantity','line_total'];


    
    public function products()
    {
        return $this->hasMany(Product::class,'id','product_id');
    }

}
