<?php

namespace App\Http\Controllers;

use App\Histroy_banner;
use App\Home_video;
use App\Interview_story;
use App\Publication_banner;
use App\Service_banner;
use App\Service_detail;
use App\Shop_banner;
use App\Still_banner;
use App\Still_banner_two;
use Illuminate\Http\Request;
use Image;

class ExtraController extends Controller
{
    
    public function updateparts(){
        return view('admin.presentation.index', [
            'presentation_info' => Home_video::find(1),
            'history_banner' => Histroy_banner::find(1),
            'publication_banner' => Publication_banner::find(1),
            'interview_story' => Interview_story::find(1),
            'still_banner' => Still_banner::find(1),
            'still_banner_two' => Still_banner_two::find(1),
            'service_banner' => Service_banner::find(1),
            'service_detail' => Service_detail::find(1),
            'shop_banner' => Shop_banner::find(1),
        ]);
    }
    public function homepresentationpost(Request $request, $id){
        home_video::find($id)->update($request->except('_token'));
        return back()->with('update_video', 'Presentation updated successfully');
    }
    public function bannerdetailpost(Request $request, $id){
        Histroy_banner::find($id)->update($request->except('_token', 'photo'));
        
        if ($request->hasFile('photo')) {
            if(Histroy_banner::find(1)->photo != 'default.png'){
               $old_photo_location = 'public/uploads/history_banner/'.Histroy_banner::find(1)->photo;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('photo');
            $new_photo_name = $id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location = 'public/uploads/history_banner/'.$new_photo_name;
           Image::make($uploaded_photo)->save(base_path($new_photo_location));
           Histroy_banner::find(1)->update([
              'photo' =>  $new_photo_name,
           ]);
           return back()->with('history_banner','Updated successfully!');
        } else {
            return back()->withErrors('No file was uploaded');
        }

    }
    public function publicationbannerupdate(Request $request, $id){
        Publication_banner::find($id)->update($request->except('_token', 'bg'));
        
        if ($request->hasFile('bg')) {
            if(Publication_banner::find(1)->bg != 'default.png'){
               $old_photo_location = 'public/uploads/publication_banner/'.Publication_banner::find(1)->bg;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('bg');
            $new_photo_name = $id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location = 'public/uploads/publication_banner/'.$new_photo_name;
           Image::make($uploaded_photo)->save(base_path($new_photo_location));
           Publication_banner::find(1)->update([
              'bg' =>  $new_photo_name,
           ]);
           return back()->with('publication_banner','Updated successfully!');
        } else {
            return back()->withErrors('No file was uploaded');
        }
    }
    public function interviewstoryupdate(Request $request, $id) {
        Interview_story::find($id)->update($request->except('_tokne'));
        return back()->with('story_update', 'Interview story updated successfully!!');
    }
    public function stillbannerupdate(Request $request, $id) {
        
        Still_banner::find($id)->update($request->except('_token', 'bg'));
        
        if ($request->hasFile('bg')) {
            if(Still_banner::find(1)->bg != 'default.png'){
               $old_photo_location = 'public/uploads/still_banner/'.Still_banner::find(1)->bg;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('bg');
            $new_photo_name = $id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location = 'public/uploads/still_banner/'.$new_photo_name;
           Image::make($uploaded_photo)->save(base_path($new_photo_location));
           Still_banner::find(1)->update([
              'bg' =>  $new_photo_name,
           ]);
           return back()->with('still_update', 'Updated successfully!');
        } else {
            return back()->withErrors('No file was uploaded');
        }

    }
    
    public function stillbannerupdatetwo(Request $request, $id) {
        
        Still_banner_two::find($id)->update($request->except('_token', 'bg'));
        
        if ($request->hasFile('bg')) {
            if(Still_banner_two::find(1)->bg != 'default.png'){
               $old_photo_location = 'public/uploads/still_banner_two/'.Still_banner_two::find(1)->bg;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('bg');
            $new_photo_name = $id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location = 'public/uploads/still_banner_two/'.$new_photo_name;
           Image::make($uploaded_photo)->save(base_path($new_photo_location));
           Still_banner_two::find(1)->update([
              'bg' =>  $new_photo_name,
           ]);
           return back()->with('still_update_two', 'Updated successfully!');
        } else {
            return back()->withErrors('No file was uploaded');
        }

    }
    public function servicebannerupdate(Request $request, $id){

        Service_banner::find($id)->update($request->except('_token', 'bg'));
        
        if ($request->hasFile('bg')) {
            if(Service_banner::find(1)->bg != 'default.png'){
               $old_photo_location = 'public/uploads/service_banner/'.Service_banner::find(1)->bg;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('bg');
            $new_photo_name = $id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location = 'public/uploads/service_banner/'.$new_photo_name;
           Image::make($uploaded_photo)->save(base_path($new_photo_location));
           Service_banner::find(1)->update([
              'bg' =>  $new_photo_name,
           ]);
           return back()->with('service_banner', 'Updated successfully!');
        } else {
            return back()->withErrors('No file was uploaded');
        }
    }
    public function servicedetailupdate(Request $request, $id) {
        Service_detail::find($id)->update($request->except('_token', 'thumbnail'));
        if ($request->hasFile('thumbnail')) {
            if(Service_detail::find(1)->thumbnail != 'default.png'){
               $old_photo_location = 'public/uploads/service_detail/'.Service_detail::find(1)->thumbnail;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('thumbnail');
            $new_photo_name = $id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location = 'public/uploads/service_detail/'.$new_photo_name;
           Image::make($uploaded_photo)->save(base_path($new_photo_location));
           Service_detail::find(1)->update([
              'thumbnail' =>  $new_photo_name,
           ]);
           return back()->with('service_detail', 'Updated successfully!');
        } else {
            return back()->withErrors('No file was uploaded');
        }
    }
    public function shopbannerupdate(Request $request, $id){

        Shop_banner::find($id)->update($request->except('_token', 'bg'));
        
        if ($request->hasFile('bg')) {
            if(Shop_banner::find(1)->bg != 'default.png'){
               $old_photo_location = 'public/uploads/shop_banner/'.Shop_banner::find(1)->bg;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('bg');
            $new_photo_name = $id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location = 'public/uploads/shop_banner/'.$new_photo_name;
           Image::make($uploaded_photo)->save(base_path($new_photo_location));
           Shop_banner::find(1)->update([
              'bg' =>  $new_photo_name,
           ]);
           return back()->with('shop_banner', 'Updated successfully!');
        } else {
            return back()->withErrors('No file was uploaded');
        }

    }
}