<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::whereNot('role_type',0)->latest()->simplePaginate(12);
        return view("admin.page.user.index", compact("users"));
    }
    public function create()
    {
        return view("admin.page.user.user");
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            "name"=> "required",
            "email"=> "required|email|unique:users,email",
            "password"=> "required|min:6",
        ]);
        $user = User::create([
            "name"=> $request->name,
            "email"=> $request->email,
            "password"=> bcrypt($request->password),
        ]);
        return back()->with("success","Add successfully");
    }
    public function delete($id)
    {
        User::find($id)->delete();
        return back()->with('warning','delete successfully');
    }
    
}
