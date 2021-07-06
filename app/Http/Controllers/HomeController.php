<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\blog;
use App\Models\subscriber;
use App\Models\report;
use Mail;
use App\Mail\Subscribe;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
    //  * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');;
        // return view('welcome',['blogs'=> blog::skip(0)->take(6)->latest('updated_at')->where('active',1)->get()]);
    }

    public function r1()
    {
        return DB::select('select * from users');
    }

    public function route(string $val,int $val2){
        return view('pages/page')->with('val',$val);
    }

    public function blog($slug)
    {
        $blog = blog::where('slug',$slug)->get();
        $blog = $blog[0];
        $blogs = blog::where('active',1)->skip(0)->take(5)->latest('updated_at')->get();
        return view('pages/blog', ['blog' => $blog,'blogs' => $blogs]);
        // return $blog;
    }
    public function blogs(int $id=0)
    {   
        $noofblogs = 12;
        if ($id==0) {
            $prev=0;
        }else{
            $prev=1;
        }
        // $prev = blog::skip(($id-1)*$noofblogs)->take($noofblogs)->orderBy('updated_at', 'desc')->count();
        
        $blogs = blog::where('active',1)->skip($id*$noofblogs)->take($noofblogs)->latest('updated_at')->get();
        $next = blog::where('active',1)->skip(($id+1)*$noofblogs)->take($noofblogs)->latest('updated_at')->count();
        return view('pages/blogs', ['blogs' => $blogs, 'prev'=>$prev, 'next'=>$next,'id'=>$id]);
        // return $blogs;
    }
    public function addsubscriber(Request $req)
    {
        $subscriber = new subscriber;
        $subscriber->email =  $req->get('email');
        $subscriber->save();
        $to_name = "My Name";
        $to_email = $req->get('email');
        $data = [
            "title" => "Random NAme - Title",
            "url" => "This is just a random message"
        ];
        Mail::send('mail.contactmail', $data, function ($message) use ($to_email) {
            $message->to($to_email)
                ->from('iamtest@gmail.com', 'Test Name');
            $message->subject('Subject');
        });


        // Mail::to($to_email)->send(new Subscribe($data));
        return redirect($req->get('route'))->with('success', 'Email has been added Successfully');
        // echo $to_email;
        // return new Subscribe();
    }
    public function bookmark(Request $req)
    {
        $to_email = $req->get('email');
        $data = [
            "id" => $req->get('id')
        ];
        Mail::send('mail.contactmail', $data, function ($message) use ($to_email) {
            $message->to($to_email)
                ->from('iamtest@gmail.com', 'Test Name');
            $message->subject('Subject');
        });


        return redirect($req->get('route'))->with('success', 'Insight has been Bookmarked');
    }
    public function report(Request $req){
        $report = new report;
        $report->name =  $req->get('name');
        $report->email =  $req->get('email');
        $report->report =  $req->get('report');
        $report->save();
        return redirect($req->get('route'))->with('success','Report has been Registered Successfully');
    }
}