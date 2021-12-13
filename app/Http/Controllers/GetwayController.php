<?php

namespace App\Http\Controllers;

use App\Getway_slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class GetwayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.getway_slider.index', [
            'sliders' => Getway_slider::latest()->get()
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
        $getway_id = Getway_slider::insertGetId($request->except('_token', 'bg') + [
            'created_at' => Carbon::now()
        ]);
        
        if ($request->hasFile('bg')) {
            $uploaded_photo = $request->file('bg');
            $new_photo_name = $getway_id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location = 'public/uploads/getway_slider/'.$new_photo_name;
           Image::make($uploaded_photo)->save(base_path($new_photo_location));
           Getway_slider::find($getway_id)->update([
              'bg' =>  $new_photo_name,
           ]);
           return back()->with('add_slider','Slider added successfully!');
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
        
        return view('admin.getway_slider.show', [
            'info' => Getway_slider::find($id)
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
        
        Getway_slider::find($id)->update($request->except('_token', 'bg'));
        
        if ($request->hasFile('bg')) {
            if(Getway_slider::find($id)->bg != 'default.png'){
               $old_photo_location = 'public/uploads/getway_slider/'.Getway_slider::find($id)->bg;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('bg');
            $new_photo_name = $id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location = 'public/uploads/getway_slider/'.$new_photo_name;
           Image::make($uploaded_photo)->save(base_path($new_photo_location));
           Getway_slider::find($id)->update([
              'bg' =>  $new_photo_name,
           ]);
           return back()->with('update_slider','Slider updated successfully!');
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
        if(Getway_slider::find($id)->bg != 'default.png'){
           $old_photo_location = 'public/uploads/getway_slider/'.Getway_slider::find($id)->bg;
            unlink(base_path($old_photo_location));
        }
        Getway_slider::find($id)->delete();
        return back()->with('delete_slider', 'Slider deleted successfully!!');
        
    }
}
