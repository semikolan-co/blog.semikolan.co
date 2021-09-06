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
}
