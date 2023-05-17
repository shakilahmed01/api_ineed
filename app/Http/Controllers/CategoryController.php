<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Subcategory;
use Carbon\Carbon;

class CategoryController extends Controller
{



    // create
    function cat_create(Request $request)
    {
        // echo $request;
        Category::insert([
            'category_name'                =>$request->category_name,
            'category_discount'          =>$request->category_discount,
            'created_at'                 =>Carbon::now(),
        ]);

        return back();
    }

    function cat_edit($id){

        $list=Category::findOrFail($id);
        return view('Dashboard.category.single_category_view',compact('list'));
      }
      function cat_update(Request $request){

        Category::findOrFail($request->id)->update([
          'category_name'=>$request->category_name,
          'category_discount'=>$request->category_discount,

        ]);
        return back();
      }

    // sub_cat_create
    function sub_cat_create(Request $request)
    {
        // echo $request;
        Subcategory::insert([
            'subcategory_card_number'              =>$request->subcategory_card_number,
            'category_id'               =>$request->category_id,
            'created_at'                =>Carbon::now(),
        ]);

        return back();
    }

    function sub_edit($id){

        $list=Subcategory::findOrFail($id);
        return view('Dashboard.category.single_subcategory_view',compact('list'));
      }
      function sub_update(Request $request){

        Subcategory::findOrFail($request->id)->update([
          'subcategory_card_number'=>$request->subcategory_card_number,
          'category_id'=>$request->category_id,

        ]);
        return back();
      }


    // get_subcategory


    // END

    //category view
    function view_category(){
      $lists=Category::all();
      return view('Dashboard.category.category_view',compact('lists'));
    }
    //end

    //subcategory view
    function view_subcategory(){
      $lists=Subcategory::all();

      return view('Dashboard.category.subcategory_view',compact('lists'));
    //end
}
}
