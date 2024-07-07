<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view("auth.login");
    }
    public function login(Request $request)
    {
        $this->validate($request,[
            "email"=> "required|email",
            "password"=>"required|min:8|max:16"
        ]);
        $user = [
            "email"=> $request->email,
            "password"=> $request->password
        ];
        
        if(Auth::attempt($user))
        {
            return redirect()->route('dashboard')->with('sucess','Login successfully');
        }else{
            return redirect('login')->with('error','Somthing Wrong');
        }
    }
    public function register()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            "email"=> "required|email|unique:users,email",
            "password"=> "required|min:5",
            "name"=>"required",
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->intended('dashboard')->with('success','');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function edit(){
        $user = User::where('id',auth()->user()->id)->first();
        return view('auth.edit',compact('user'));
    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'image'=>'image',
        ]);
        $user = User::where('id',auth()->user()->id)->first();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->address = $request->address;
        if ($request->hasFile('image')) {
            if ($user->image)
            {
                if (file_exists($user->image))
                {
                    unlink($user->image);
                }
            }
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $dir = 'admin/assets/upoad';
            $image->move($dir, $imageName);
            $user->image = $dir.'/'.$imageName;
        }
        $user->save();
        return back()->with('success','Update successfully');
    }

    public function updatePasswordForm()
    {
        return view('auth.changePassword');       
    }

    public function updatePassword(Request $request)
    {   
        $request->validate([
          'old_password' => 'required',
          'new_password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
          'password_confirmation' => 'min:6'
        ]);
        if(Hash::check($request->old_password , auth()->user()->password)) {
            if(!Hash::check($request->new_password , auth()->user()->password)) {
               $user = User::find(auth()->id());
               $user->update([
                   'password' => bcrypt($request->new_password)
               ]);
               return redirect()->back()->with('success','Password updated successfully!');
            }
            return redirect()->back()->with('Warning','New password can not be the old password!');
        }
        
        return redirect()->back()->with('Error','Old password does not matched!');
    }
}