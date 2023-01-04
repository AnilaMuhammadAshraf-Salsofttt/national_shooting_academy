<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductColorImage;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
class ProductController extends Controller
{

public function index(request $request)
{
    if($request->from && $request->to){
        $data['product']=Product::with('category')->whereBetween('created_at',[request('from'),request('to')])->orderBy('id','desc')->get();
    }else{
        $data['product']=Product::with('category')->orderBy('id','desc')->get();
    }
    return view('admin.inventory-management',$data);
}

public function create_product(request $request)
{

    $img_name = null;

    if ($request->file('baseimg')) {
        $filePath = storage_path('app/public/banner_image/'.$request->baseimg);
        if(is_file($filePath) && file_exists($filePath)){
        unlink($filePath);
        }
        $path = $request->baseimg->store('public/banner_image');
        $extension = explode('/', $path);
        $img_name = end($extension);
    }

    $Product= new Product();
    $Product->name = $request->name;
    $Product->category_id = $request->cid;
    $Product->price = $request->price;
    $Product->stock = $request->stock;
    $Product->description = $request->des;
    $Product->base_image=$img_name;
    $Product->save();

  $allowedfileExtension=['pdf','jpg','png','jpeg'];
    $files = $request->file('multi_image');
    if (isset($files)) {

        $errors = [];
        foreach ($files as $file) {
            $extension = $file->getClientOriginalExtension();
            $check = in_array($extension,$allowedfileExtension);
                $id=1;
            if($check) {
                foreach($request->file('multi_image') as $mediaFiles) {
                        // dd($mediaFiles);
                        $media_ext = $mediaFiles->getClientOriginalName();

                        $media_no_ext = pathinfo($media_ext, PATHINFO_FILENAME);
                        $mFiles = 'multi_image'.$media_no_ext . '.' . $extension;

                    $path = Storage::disk('public')->putFileAs('multi_image', new File($mediaFiles),$mFiles);

                    $im = ProductImage::whereImage(url('storage/multi_image/multi_image'.$media_ext))->whereProductId($Product->id)->count();
                    if($im == 0){
                        $image = new ProductImage();
                        $image->image = url('storage/multi_image/multi_image'.$media_ext);
                        $image->product_id = $Product->id;
                        $image->save();
                        $id++;
                    }
                }
            }
        }

    }
        $id=$Product->id;
        $colorValues = array_values(explode(",",$request->colors));
        $smallValues = array_values(explode(",",$request->small));
        $mediumValues = array_values(explode(",",$request->medium));
        $largeValues = array_values(explode(",",$request->large));
        $xlargeValues = array_values(explode(",",$request->xlarge));
        $xxlargeValues = array_values(explode(",",$request->xxlarge));
        // dd($colorValues, 'dfsdfsdff', $smallValues);


        foreach ($colorValues as $key => $value) {
            $img_name1 = null;
            if ($request->file('imgs')) {
                $filePath = storage_path('app/public/banner_image/'.$request->imgs[$key]);
                if(is_file($filePath) && file_exists($filePath)){
                unlink($filePath);
                }
                $path = $request->imgs[$key]->store('public/banner_image');
                $extension = explode('/', $path);
                $img_name1 = end($extension);
            }


            $add=new ProductColorImage();
            $add->product_id=$id;
            $add->color= $value;
            $add->base_image=$img_name1;
            $add->small= isset($smallValues[$key]) ? 1 : 0;
            $add->medium= isset($mediumValues[$key]) ? 1 : 0;
            $add->large= isset($largeValues[$key]) ? 1 : 0;
            $add->xlarge= isset($xlargeValues[$key]) ? 1 : 0;
            $add->xxlarge=isset($xxlargeValuesl[$key]) ? 1 : 0;
            $add->save();

        }

    //   foreach ($request->id as $key => $data) {
    //         $filePath = storage_path('app/public/banner_image/'.$request->imgs[$key]);
    //             if(is_file($filePath) && file_exists($filePath)){
    //             unlink($filePath);
    //             }
    //             $path = $request->imgs[$key]->store('public/banner_image');
    //             $extension = explode('/', $path);
    //            $img_name = end($extension);
    //             $add=new ProductColorImage();
    //             $add->product_id=$id;
    //             $add->color=$request->colors[$key];
    //             $add->base_image=$img_name;
    //             $add->small=$request->small[$key];
    //             $add->medium=$request->medium[$key];
    //             $add->large=$request->large[$key];
    //             $add->xlarge=$request->xlarge[$key];
    //             $add->xxlarge=$request->xxlarge[$key];
    //             $add->save();
    //     }

    Session::flash('message','Product Has Been Added Successfully');
      return response()->json(['success'=>true]);
}

public function add_product(request $request)
{
    $data['category'] = Category::all();
return view('admin.add-product',$data);
}

public function view_product(request $request,$id)
{
    $data['product'] = Product::with('category')->whereId($id)->first();
    $data['image'] = ProductImage::whereProductId($id)->get();
    return view('admin.view-product',$data);
}

public function edit_product(request $request,$id)
{
    $data['category'] = Category::all();
    $data['product'] = Product::with('category')->whereId($id)->first();
    $data['image'] = ProductImage::whereProductId($id)->get();




return view('admin.edit-product',$data);
}

public function update_product(request $request)
{
    $Product = Product::whereId($request->id)->first();

    $Product->name = $request->name;
    $Product->category_id = $request->category_id;
    $Product->price = $request->price;
    $Product->stock = $request->stock;
    $Product->description = $request->description;

    if( $request->file('banner_image') )
    {
       $mediaFiles1=  $request->file('banner_image');
        $media_ext1 = $mediaFiles1->getClientOriginalName();
        $extension1 = $mediaFiles1->getClientOriginalExtension();

        $media_no_ext1 = pathinfo($media_ext1, PATHINFO_FILENAME);
        $mFiles1 = 'banner_image'.$media_no_ext1 . '.' . $extension1;
     $path = Storage::disk('public')->putFileAs('banner_image', new File($mediaFiles1),$mFiles1);
     $Product->base_image =  url('storage/banner_image/banner_image'.$media_ext1);
    }

    $Product->save();



    $allowedfileExtension=['pdf','jpg','png','jpeg'];
    $files = $request->file('multi_image');
    $errors = [];

    foreach ($files as $file) {

        $extension = $file->getClientOriginalExtension();
        $check = in_array($extension,$allowedfileExtension);
              $id=1;
        if($check) {
            foreach($request->file('multi_image') as $mediaFiles) {
                     // dd($mediaFiles);
                     $media_ext = $mediaFiles->getClientOriginalName();

                     $media_no_ext = pathinfo($media_ext, PATHINFO_FILENAME);
                     $mFiles = 'multi_image'.$media_no_ext . '.' . $extension;

                  $path = Storage::disk('public')->putFileAs('multi_image', new File($mediaFiles),$mFiles);

                  $im = ProductImage::whereImage(url('storage/multi_image/multi_image'.$media_ext))->whereProductId($Product->id)->count();
                  if($im == 0){

                      $image = new ProductImage();
                      $image->image = url('storage/multi_image/multi_image'.$media_ext);
                      $image->product_id = $Product->id;
                     $image->save();
                     $id++;
                  }
            }
        } else {

        }
    }
    Session::flash('message','Product Has Been updated Successfully');
    return redirect('inventory_management');

}

public function delete_product(request $request,$id)
{
   Product::whereId($request->id)->delete();

    Session::flash('error','Product Has Been Deleted Successfully');
    return redirect('inventory_management');
}



}
