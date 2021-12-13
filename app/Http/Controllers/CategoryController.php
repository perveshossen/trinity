<?php

namespace App\Http\Controllers;

use App\Shop_Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.shop_category.index', [
            'categories' => Shop_Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shop_category_id = Shop_Category::insertGetId($request->except('_token', 'thumbnail') + [
            'created_at' => Carbon::now()
        ]);
        
        if ($request->hasFile('thumbnail')) {
            $uploaded_photo = $request->file('thumbnail');
            $new_photo_name = $shop_category_id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location = 'public/uploads/shop_category/'.$new_photo_name;
           Image::make($uploaded_photo)->save(base_path($new_photo_location));
           Shop_Category::find($shop_category_id)->update([
              'thumbnail' =>  $new_photo_name,
           ]);
           return back()->with('add_category','Shop category added successfully!');
        } else {
            return back()->withErrors('No file was uploaded');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.shop_category.show', [
            'info' => Shop_Category::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        Shop_Category::find($id)->update($request->except('_token', 'thumbnail'));
        
        if ($request->hasFile('thumbnail')) {
            if(Shop_Category::find($id)->thumbnail != 'default.png'){
               $old_photo_location = 'public/uploads/shop_category/'.Shop_Category::find($id)->thumbnail;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('thumbnail');
            $new_photo_name = $id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location = 'public/uploads/shop_category/'.$new_photo_name;
           Image::make($uploaded_photo)->save(base_path($new_photo_location));
           Shop_Category::find($id)->update([
              'thumbnail' =>  $new_photo_name,
           ]);
           return back()->with('update_category','Shop category updated successfully!');
        } else {
            return back()->withErrors('No file was uploaded');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Shop_Category::find($id)->thumbnail != 'default.png'){
           $old_photo_location = 'public/uploads/shop_category/'.Shop_Category::find($id)->thumbnail;
            unlink(base_path($old_photo_location));
        }
        Shop_Category::find($id)->delete();
        return back()->with('delete_category', 'Shop category deleted successfully!!');
        
    }
}
