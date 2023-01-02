<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductColorImage;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


    public function user_category()
    {
        $data['user_category']=Category::all();
        return view('user.category.category',$data);
    }

    public function user_inner_category($id)
    {

        $data['product']=Product::with('multi_images','wishlist')->when(request('radio_group'),function($q){
            $q->whereIn('category_id',request('radio_group'));
        })
        ->whereStatus('active')
        ->whereCategoryId($id)
        ->orderBy('id','DESC')
        ->paginate(6);

        $data['category']=Category::all();
        $data['category_by_id']=Category::whereId($id)->first();

        return view('user.category.category-inner',$data);
    }

    public function user_inner_category_filter()
    {

        $data['product']=Product::with('multi_images','wishlist')
        ->when(request('radio_group'),function($q){
            $q->whereIn('category_id',request('radio_group'));
        })
        ->when(request('start_amount') && request('end_amount'),function($q){
            $q->whereBetween('price', [request('start_amount'),request('end_amount')]);
        })
        ->when(request('sort_by') == '1000',function($q){
            $q->orderBy('price', 'desc');
        })
        ->when(request('sort_by') == '1',function($q){
            $q->orderBy('price', 'asc');
        })
        ->when(request('sort_by') == 'A-Z',function($q){
            $q->orderBy('name', 'asc');
        })
        ->when(request('sort_by') == 'Z-A',function($q){
            $q->orderBy('name', 'desc');
        })
        ->whereStatus('active')
        ->orderBy('id','DESC')
        ->paginate(6);

        $data['category']=Category::all();

        return view('user.category.category-inner-filter',$data);
    }

    public function user_inner_product($id,$category_id)
    {

        $data['product']=Product::with('multi_images','wishlist','category','color_images')
        ->whereStatus('active')
        ->whereId($id)
        ->first();

        $data['recomended_product']=Product::with('multi_images','wishlist','category','color_images')
        ->whereStatus('active')
        ->whereCategoryId($category_id)->take(4)->latest()->get();

        return view('user.category.product-inner',$data);
    }

    //get color image by id
    public function getColorImage(Request $request){
        $path=ProductColorImage::whereId($request->id)->pluck('base_image');
        return response()->json(['image'=>$path]);
    }


    // public function filter_product()
    // {
    //     $product=Product::with('multi_images','wishlist')
    //     ->whereStatus('active')->whereIn('category_id', request('product_id'))->get();

    //     $output = "";

    //     foreach ($product as $products){
    //         if ($products->wishlist == ''){

    //       $output .= '
    //     <div class="col-xl-4 col-lg-6 col-md-6 col-12">
    //         <div class="product-div">
    //         <a  class="prod-wishlist" href="'.url('add_to_wishlist/'.$products->id).'" class="wishlist">
    //         <i class="far fa-heart" style="color:red;"  ></i></a>

    //             <a class="prod-a2c" href='.url('user_inner_product/'.$products->id.'/'.$products->category_id).'><i class="fas fa-shopping-cart"></i></a>
    //             <img src="'.$products->base_image.'" alt="n/a">
    //             <p class="product-title">'.ucfirst($products->name).'</p>
    //             <p class="product__price">$'.$products->price.'</p>
    //         </div>
    //     </div>';

    //     }else{
    //     $output .= '
    //     <div class="col-xl-4 col-lg-6 col-md-6 col-12">
    //         <div class="product-div">
    //         <a  class="prod-wishlist" href="'.url('remove_to_wishlist/'.$products->id).'" class="wishlist">
    //         <i style="color:red;" class="fa fa-heart" ></i></a>

    //             <a class="prod-a2c" href='.url('user_inner_product/'.$products->id.'/'.$products->category_id).'><i class="fas fa-shopping-cart"></i></a>
    //             <img src="'.$products->base_image.'" alt="n/a">
    //             <p class="product-title">'.ucfirst($products->name).'</p>
    //             <p class="product__price">$'.$products->price.'</p>
    //         </div>
    //     </div>';

    //         }
    // }
    // echo $output;

    // }

}
