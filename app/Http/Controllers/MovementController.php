<?php

namespace App\Http\Controllers;

use App\Movement;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class MovementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.movement.index', [
            'movements' => Movement::all()
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
        
        $movement_id = Movement::insertGetId($request->except('_token', 'photo') + [
            'created_at' => Carbon::now()
        ]);
        
        if ($request->hasFile('photo')) {
            $uploaded_photo = $request->file('photo');
            $new_photo_name = $movement_id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location = 'public/uploads/movement/'.$new_photo_name;
           Image::make($uploaded_photo)->save(base_path($new_photo_location));
           Movement::find($movement_id)->update([
              'photo' =>  $new_photo_name,
           ]);
           return back()->with('add_movement','Movement added successfully!');
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
        
        return view('admin.movement.show', [
            'info' => Movement::find($id)
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
        
        Movement::find($id)->update($request->except('_token', 'photo'));
        
        if ($request->hasFile('photo')) {
            if(Movement::find($id)->photo != 'default.png'){
               $old_photo_location = 'public/uploads/movement/'.Movement::find($id)->photo;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('photo');
            $new_photo_name = $id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location = 'public/uploads/movement/'.$new_photo_name;
           Image::make($uploaded_photo)->save(base_path($new_photo_location));
           Movement::find($id)->update([
              'photo' =>  $new_photo_name,
           ]);
           return back()->with('update_movement','Movement updated successfully!');
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
        
        if(Movement::find($id)->photo != 'default.png'){
            $old_photo_location = 'public/uploads/movement/'.Movement::find($id)->photo;
             unlink(base_path($old_photo_location));
         }
         Movement::find($id)->delete();
         return back()->with('delete_movement', 'Movement deleted successfully!!');
         
    }
}
