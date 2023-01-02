<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Session;
class CategoryController extends Controller
{


public function index()
{   
    $data['category'] =Category::when(request('to'),function($q){
        $q->whereBetween('created_at',[request('from'),request('to')]);
     })->get();
    return view('admin.category.category',$data);
}

public function category_add()
{   
    return view('admin.category.category_add');
}

public function category_insert(request $request)
{   
  $category =  new Category();
  $category->fill($request->all());
  $category->save();

  Session::flash('message','Category has been Added Successfully');
  return redirect(url('category'));
}

public function category_edit(request $request,$id)
{   
  $data['category'] =  Category::whereId($id)->first();

  return view('admin.category.category_edit',$data);

}
public function category_update(request $request)
{   
  $category=  Category::whereId($request->id)->first();
  $category->fill($request->all());
  $category->save();

  Session::flash('message','Category has been Updated Successfully');
  return redirect(url('category'));
}
public function category_delete(request $request,$id)
{   
   Category::whereId($id)->delete();
  Session::flash('error','Category has been Deleted Successfully');
  return redirect(url('category'));
}


}
