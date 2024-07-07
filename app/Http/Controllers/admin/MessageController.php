<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\User;
use App\Notifications\MessageNotification;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::latest("id")->simplePaginate(12);
        return view("admin.page.message.message",compact("messages"));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            "name"=> "required",
            "subject"=> "required",
            "email"=> "required|email",
            "message"=> "required",
        ]);
        $message = Message::create([
            "name"=> $request->name,
            "subject"=> $request->subject,
            "email"=> $request->email,
            "message"=> $request->message,
        ]);
        
        $admin = User::where('role_type', '0')->first();
        $name = $request->name;
        $admin->notify(new MessageNotification($name));
        
        return back()->with("success","Sent Successfully");
    }
    public function delete($id)
    {
        Message::find($id)->delete();
        return back()->with('warning','Messages delete successfully');
    }
}
