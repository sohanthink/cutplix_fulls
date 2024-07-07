<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::latest()->first();
        return view('admin.page.about.index',compact('about'));
    }
    public function store(Request $request)
    {
        if(About::all()->count()<1)
        {
            $about = new About();
        }else{
            $about = About::latest()->first();
        }
        $about->title= $request->title;
        $about->description= $request->description;
        if ($request->hasFile('image')) {
            if ($about->image)
                {
                    if (file_exists($about->image))
                    {
                        unlink($about->image);
                    }
                }
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $dir = 'admin/assets/upoad';
            $image->move($dir, $imageName);
            $about->image = $dir.'/'.$imageName;
        }
        $about->save();
        return back()->with('success','Update SuccessFully');

    }
}
