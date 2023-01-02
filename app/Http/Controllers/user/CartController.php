<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{
    
    // public function __construct()
    // {
    //     $this->middleware('web')->except('logout');
    // }
    
    public function view_cart()
    {
        $data['cartItem'] = \Cart::getContent();
        $data['sub_total'] =  \Cart::getSubTotal();
        return view('user.cart.u-cart',$data);
    }


    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->base_image,
            )
        ]);
        return redirect()->back()->with('message', 'Product is Added to Cart Successfully !');
    }

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        Session::flash('message', 'Item Cart is Updated Successfully !');
        return redirect(url('view_cart'));
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        Session::flash('error', 'Item is Removed from Cart  Successfully !');
        return redirect(url('view_cart'));
    }

    public function clearAllCart()
    {
        \Cart::clear();
        Session::flash('error', 'All Item Cart Clear Successfully !');
        return redirect(url('view_cart'));
    }
}
