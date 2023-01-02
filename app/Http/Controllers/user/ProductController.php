<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Session;
use App\Models\WishList;

class ProductController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('web')->except('logout');
    }

    public function add_to_wishlist($product_id)
    {
        WishList::create([
          'user_id' => Auth::user()->id,
          'product_id' => $product_id,
      ]);

      return redirect()->back()->with('message',"product has been added to wish list");
    }

    public function remove_to_wishlist($product_id)
    {
      
     WishList::whereProductId($product_id)->delete();

      return redirect()->back()->with('error',"product has been Removed to wish list");

    }


    public function wishlist()
    {
      $data['wishlist']=WishList::with('product')->whereUserId(auth()->user()->id)->wherehas('product',function($q){
        $q->whereStatus('active');
      })->get();
      return view('user.wishlist.wishlist',$data);
    }


}
