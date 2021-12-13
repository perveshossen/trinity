<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.testimonial.index', [
            'testimonials' => Testimonial::all()
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
        
        $testimonial_id = Testimonial::insertGetId($request->except('_token', 'thumbnail') + [
            'created_at' => Carbon::now(),
        ]);
        
        if ($request->hasFile('thumbnail')) {
            $uploaded_photo = $request->file('thumbnail');
            $new_photo_name = $testimonial_id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location = 'public/uploads/testimonial_photo/'.$new_photo_name;
           Image::make($uploaded_photo)->save(base_path($new_photo_location));
           Testimonial::find($testimonial_id)->update([
              'thumbnail' =>  $new_photo_name,
           ]);
           return back()->with('add_testimonial','Testimonial added successfully!');
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
        return view('admin.testimonial.show', [
            'memories' => Testimonial::find($id)
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
        
        Testimonial::find($id)->update($request->except('_token', 'thumbnail'));
        
        if ($request->hasFile('thumbnail')) {
            if(Testimonial::find($id)->thumbnail != 'default.png'){
               $old_photo_location = 'public/uploads/testimonial_photo/'.Testimonial::find($id)->thumbnail;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('thumbnail');
            $new_photo_name = $id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location = 'public/uploads/testimonial/'.$new_photo_name;
           Image::make($uploaded_photo)->save(base_path($new_photo_location));
           Testimonial::find($id)->update([
              'thumbnail' =>  $new_photo_name,
           ]);
           return back()->with('update_testimonial','Testimonial updated successfully!');
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
        
        if(Testimonial::find($id)->thumbnail != 'default.png'){
            $old_photo_location = 'public/uploads/testimonial_photo/'.Testimonial::find($id)->thumbnail;
             unlink(base_path($old_photo_location));
         }
         Testimonial::find($id)->delete();
         return back()->with('delete_testimonial', 'Testimonial deleted successfully!!');
         
    }
}
