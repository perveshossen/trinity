<?php

namespace App\Http\Controllers;

use App\Memoriae_two;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class MemoriaeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.memoriae_two.index', [
            'memories' => Memoriae_two::latest()->get(),
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
        $memoriae_id = Memoriae_two::insertGetId($request->except('_token', 'photo') + [
            'created_at' => Carbon::now(),
        ]);
        
        
        if ($request->hasFile('photo')) {
            $uploaded_photo = $request->file('photo');
            $new_photo_name = $memoriae_id .".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location = 'public/uploads/memoriae_two_photo/'.$new_photo_name;
           Image::make($uploaded_photo)->save(base_path($new_photo_location));
           Memoriae_two::find($memoriae_id)->update([
              'photo' =>  $new_photo_name,
           ]);
           return back()->with('add_memoriae','Memoriae added successfully!');
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
        return view('admin.memoriae_two.show', [
            'info' => Memoriae_two::find($id)
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
        
        Memoriae_two::find($id)->update($request->except('_token', 'photo'));
        
        if ($request->hasFile('photo')) {
            if(Memoriae_two::find($id)->photo != 'default.png'){
               $old_photo_location = 'public/uploads/memoriae_two_photo/'.Memoriae_two::find($id)->photo;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('photo');
            $new_photo_name = $id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location = 'public/uploads/memoriae_two_photo/'.$new_photo_name;
           Image::make($uploaded_photo)->save(base_path($new_photo_location));
           Memoriae_two::find($id)->update([
              'photo' =>  $new_photo_name,
           ]);
           return back()->with('update_memory','Memoriae updated successfully!');
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
        
        if(Memoriae_two::find($id)->photo != 'default.jpg'){
            $old_photo_location = 'public/uploads/memoriae_two_photo/'.Memoriae_two::find($id)->photo;
             unlink(base_path($old_photo_location));
         }
         Memoriae_two::find($id)->delete();
         return back()->with('delete_memoriae', 'Memoriae deleted successfully!!');
    }
}
