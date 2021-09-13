<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\blog;
use App\Models\subscriber;
use App\Models\report;
use App\Models\blog_category;
use App\Models\blog_subcategory;
use App\Models\Message;
use App\Models\Giveaway;
use Auth;

use Mail;
class APIController extends Controller
{
    function getCategory(Request $req){
        return blog_subcategory::where('parent_category',$req->catId)->get();
    }
    function subscribeuser(Request $req){
        // Check if user already subscribed
        $subscriber = subscriber::where('email',$req->email)->first();
        if($subscriber){
            return response()->json(['status'=>'error','message'=>'You are already subscribed']);
        }
        
        $subscriber = new subscriber;
        $subscriber->email = $req->email;
        try {
            $subscriber->save();
            return response()->json(['status'=>'success','message'=>'Subscribed Successfully']);
        }
        catch (\Exception $e) {
            $message = $e->getMessage();
            return response()->json(['status'=>'error','message'=>'Something went wrong']);
        }

        
    }

    function contact(Request $req){
        $message = new Message;
        $message->name = $req->name;
        $message->email = $req->email;
        $message->message = $req->message;
        try {
            $message->save();
            return response()->json(['status'=>'success','message'=>'Message sent successfully']);  
        }
        catch (\Exception $e) {
            $message = $e->getMessage();
            return response()->json(['status'=>'error','message'=>'Something went wrong']);
        }
    }
    function giveaway(Request $req){

        // Upload File and Save it to the server
        $file = $req->file('marksheet');
        $fileName = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('uploads'), $fileName);
        
        $giveaway = new Giveaway;
        $giveaway->name = $req->name;
        $giveaway->email = $req->email;
        $giveaway->phone = $req->phone;
        $giveaway->marksheet = $fileName;
        $giveaway->discord = $giveaway->discord;
        $giveaway->instagram = $giveaway->instagram;
        try {
            $giveaway->save();
            return response()->json(['status'=>'success','message'=>'Message sent successfully']);
        }
        catch (\Exception $e) {
            $message = $e->getMessage();
            return response()->json(['status'=>'error','message'=>'Something went wrong']);
        }

    }
}
