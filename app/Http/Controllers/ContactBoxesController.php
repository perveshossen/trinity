<?php

namespace App\Http\Controllers;

use App\Contact_box;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class ContactBoxesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.contact_box.index', [
            'boxes' => Contact_box::latest()->get()
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
        $box_id = Contact_box::insertGetId($request->except('_token', 'bg') + [
            'created_at' => Carbon::now()
        ]);
        
        if ($request->hasFile('bg')) {
            $uploaded_photo = $request->file('bg');
            $new_photo_name = $box_id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location = 'public/uploads/contact_box/'.$new_photo_name;
           Image::make($uploaded_photo)->save(base_path($new_photo_location));
           Contact_box::find($box_id)->update([
              'bg' =>  $new_photo_name,
           ]);
           return back()->with('add_box','Contact box added successfully!');
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
        return view('admin.contact_box.show', [
            'info' => Contact_box::find($id)
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
        
        Contact_box::find($id)->update($request->except('_token', 'bg'));
        
        if ($request->hasFile('bg')) {
            if(Contact_box::find($id)->bg != 'default.png'){
               $old_photo_location = 'public/uploads/contact_box/'.Contact_box::find($id)->bg;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('bg');
            $new_photo_name = $id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location = 'public/uploads/contact_box/'.$new_photo_name;
           Image::make($uploaded_photo)->save(base_path($new_photo_location));
           Contact_box::find($id)->update([
              'bg' =>  $new_photo_name,
           ]);
           return back()->with('update_box','Contact box updated successfully!');
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
        if(Contact_box::find($id)->bg != 'default.png'){
           $old_photo_location = 'public/uploads/contact_box/'.Contact_box::find($id)->bg;
            unlink(base_path($old_photo_location));
        }
        Contact_box::find($id)->delete();
        return back()->with('delete_box', 'Contact box deleted successfully!!');
        
    }
}
