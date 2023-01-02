<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['name','category_id','stock','price','description','base_image','status'];


public function multi_images()
{

    return $this->hasMany(ProductImage::class);
}


public function category()
{

    return $this->hasOne(Category::class,'id','category_id');
}

public function wishlist()
{

    return $this->hasOne(WishList::class);
}
public function color_images(){
     return $this->hasMany(ProductColorImage::class);
}


}
