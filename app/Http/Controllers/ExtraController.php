<?php

namespace App\Http\Controllers;

use App\Getaway_video;
use App\Getway_slider;
use App\Histroy_banner;
use App\Home_video;
use App\Interview_story;
use App\Logo;
use App\Publication_banner;
use App\Service_banner;
use App\Service_detail;
use App\Shop_banner;
use App\Still_banner;
use App\Still_banner_two;
use App\Still_focus;
use Carbon\Carbon;
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
            'logo' => Logo::find(1),
            'focus' => Still_focus::find(1),
            'gateway_video' => Getaway_video::find(1)
        ]);
    }
    public function homepresentationpost(Request $request, $id){
        Home_video::find($id)->update($request->except('_token', 'video_thumbnail'));
        if ($request->hasFile('video_thumbnail')) {
            if(Home_video::find(1)->video_thumbnail != 'default.png'){
               $old_photo_location = 'public/uploads/home_video/'.Home_video::find(1)->video_thumbnail;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('video_thumbnail');
            $new_photo_name = $id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location = 'public/uploads/home_video/'.$new_photo_name;
           Image::make($uploaded_photo)->save(base_path($new_photo_location));
           Home_video::find(1)->update([
              'video_thumbnail' =>  $new_photo_name,
           ]);
           return back()->with('update_video', 'Updated successfully!');
        } else {
            return back()->withErrors('No file was uploaded');
        }
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
    public function logoupdate(Request $request, $id) {
        if ($request->hasFile('logo')) {
            if(Logo::find(1)->logo != 'default.png'){
               $old_photo_location = 'public/uploads/logo/'.Logo::find(1)->logo;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('logo');
            $new_photo_name = $id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location = 'public/uploads/logo/'.$new_photo_name;
           Image::make($uploaded_photo)->save(base_path($new_photo_location));
           Logo::find(1)->update([
              'logo' =>  $new_photo_name,
           ]);
           return back()->with('update_logo', 'Logo updated successfully!');
        } else {
            return back()->withErrors('No file was uploaded');
        }
    }
    public function stillfocusupdate(Request $request, $id) {
        

        Still_focus::find($id)->update($request->except('_token', 'bg'));
        
        if ($request->hasFile('bg')) {
            if(Still_focus::find(1)->bg != 'default.png'){
               $old_photo_location = 'public/uploads/still_focus/'.Still_focus::find(1)->bg;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('bg');
            $new_photo_name = $id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location = 'public/uploads/still_focus/'.$new_photo_name;
           Image::make($uploaded_photo)->save(base_path($new_photo_location));
           Still_focus::find(1)->update([
              'bg' =>  $new_photo_name,
           ]);
           return back()->with('still_focus', 'Updated successfully!');
        } else {
            return back()->withErrors('No file was uploaded');
        }
    }
    public function getwayvideoupdate(Request $request, $id){
        Getaway_video::find($id)->update($request->except('_token', 'video_thumbnail') + [
            'created_at' => Carbon::now()
        ]);
        
        if ($request->hasFile('video_thumbnail')) {
            if(Getaway_video::find(1)->video_thumbnail != 'default.png'){
               $old_photo_location = 'public/uploads/gateway_video/'.Getaway_video::find(1)->video_thumbnail;
                unlink(base_path($old_photo_location));
            }
            $uploaded_photo = $request->file('video_thumbnail');
            $new_photo_name = $id.".".$uploaded_photo->getClientOriginalExtension();
            $new_photo_location = 'public/uploads/gateway_video/'.$new_photo_name;
           Image::make($uploaded_photo)->save(base_path($new_photo_location));
           Getaway_video::find(1)->update([
              'gateway_video' =>  $new_photo_name,
           ]);
           return back()->with('gateway_video', 'Updated successfully!');
        } else {
            return back()->withErrors('No file was uploaded');
        }
    }
}
