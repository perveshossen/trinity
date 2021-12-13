<?php

namespace App\Http\Controllers;

use App\Insider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class InsiderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.insider.index', [
            'insiders' => Insider::latest()->get()
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
        
        
        $insider_id = Insider::insertGetId($request->except('_token', 'thumbnail') + [
            'created_at' => Carbon::now()
        ]);
        
        if ($request->hasFile('thumbnail')) {
            $uploaded_photo = $request->file('thumbnail');
            $new_photo_name = $insider_id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location = 'public/uploads/insider/'.$new_photo_name;
           Image::make($uploaded_photo)->save(base_path($new_photo_location));
           Insider::find($insider_id)->update([
              'thumbnail' =>  $new_photo_name,
           ]);
           return back()->with('add_insider','Insider added successfully!');
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
        return view('admin.insider.show', [
            'info' => Insider::find($id)
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
        Insider::find($id)->update($request->except('_token', 'thumbnail'));
        
        if ($request->hasFile('thumbnail')) {
            if(Insider::find($id)->thumbnail != 'default.jpg'){
               $old_photo_location = 'public/uploads/insider/'.Insider::find($id)->thumbnail;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('thumbnail');
            $new_photo_name = $id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location = 'public/uploads/insider/'.$new_photo_name;
           Image::make($uploaded_photo)->save(base_path($new_photo_location));
           Insider::find($id)->update([
              'thumbnail' =>  $new_photo_name,
           ]);
           return back()->with('update_insider','Insider updated successfully!');
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
        if(Insider::find($id)->thumbnail != 'default.jpg'){
            $old_photo_location = 'public/uploads/insider/'.Insider::find($id)->thumbnail;
             unlink(base_path($old_photo_location));
         }
         Insider::find($id)->delete();
         return back()->with('delete_insider', 'Insider deleted successfully!!');
         
    }
}
