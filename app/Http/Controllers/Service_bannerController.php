<?php

namespace App\Http\Controllers;

use App\Service_more_banner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class Service_bannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.service_banners.index', [
            'banners' => Service_more_banner::latest()->get()
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
        
        $banner_id = Service_more_banner::insertGetId($request->except('_token', 'bg') + [
            'created_at' => Carbon::now()
        ]);
        
        if ($request->hasFile('bg')) {
            $uploaded_photo = $request->file('bg');
            $new_photo_name = $banner_id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location = 'public/uploads/service_more_banner/'.$new_photo_name;
           Image::make($uploaded_photo)->save(base_path($new_photo_location));
           Service_more_banner::find($banner_id)->update([
              'bg' =>  $new_photo_name,
           ]);
           return back()->with('add_banner','Banner added successfully!');
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
        
        return view('admin.service_banners.show', [
            'info' => Service_more_banner::find($id)
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
        
        Service_more_banner::find($id)->update($request->except('_token', 'bg'));
        
        if ($request->hasFile('bg')) {
            if(Service_more_banner::find($id)->bg != 'default.png'){
               $old_photo_location = 'public/uploads/service_more_banner/'.Service_more_banner::find($id)->bg;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('bg');
            $new_photo_name = $id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location = 'public/uploads/service_more_banner/'.$new_photo_name;
           Image::make($uploaded_photo)->save(base_path($new_photo_location));
           Service_more_banner::find($id)->update([
              'bg' =>  $new_photo_name,
           ]);
           return back()->with('update_banner','Banner updated successfully!');
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
        
        if(Service_more_banner::find($id)->bg != 'default.png'){
            $old_photo_location = 'public/uploads/service_more_banner/'.Service_more_banner::find($id)->bg;
             unlink(base_path($old_photo_location));
         }
         Service_more_banner::find($id)->delete();
         return back()->with('delete_banner', 'Banner deleted successfully!!');
         
    }
}
