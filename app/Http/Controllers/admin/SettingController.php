<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::orderBy("id","desc")->first();
        return view("admin.page.setting.setting", compact("setting"));
    }
    
    public function update(Request $request, $id)
    {
        function image($request,$setting, $name)
        {
            if ($request->hasFile($name)) {
                if ($setting->name)
                {
                    if (file_exists($setting->name))
                    {
                        unlink($setting->name);
                    }
                }
                $image = $request->file($name);
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $dir = 'admin/assets/upoad/logo';
                $image->move($dir, $imageName);
                $url =  $dir.'/'.$imageName;
                return ($url);
            }
            return $setting->$name;
        }
        $request ->validate([
            
        ]);
        $isSetting = Setting::all()->count();
        if ($isSetting < 1) {
            $setting = new Setting();
            $setting->app_name= $request->app_name;
            $setting->address= $request->address;
            $setting->phone= $request->phone;
            $setting->email= $request->email;
            $setting->meta_keyword= $request->meta_keyword;
            $setting->meta_description= $request->meta_description;
            $setting->facebook= $request->facebook;
            $setting->twitter= $request->twitter;
            $setting->instragram= $request->instragram;
            $setting->linked_in= $request->linked_in;
            $setting->tiktok= $request->tiktok;
            $setting->site_logo= image($request,$setting,'site_logo');
            $setting->fav_icon= image($request,$setting,'fav_icon');
            $setting->save();
        }
        else {
        $setting = Setting::find($id);
        $setting->app_name= $request->app_name;
        $setting->address= $request->address;
        $setting->phone= $request->phone;
        $setting->email= $request->email;
        $setting->meta_keyword= $request->meta_keyword;
        $setting->meta_description= $request->meta_description;
        $setting->facebook= $request->facebook;
        $setting->twitter= $request->twitter;
        $setting->instragram= $request->instragram;
        $setting->linked_in= $request->linked_in;
        $setting->tiktok= $request->tiktok;
        $setting->site_logo= image($request,$setting,'site_logo');
        $setting->fav_icon= image($request,$setting,'fav_icon');
        $setting->save();
        }
        return back()->with('success','Update Successfully');
    }
}
