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
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

use Mail;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isuseradmin');
    }
    public function index()
    {

        $blogs = blog::all();
        $subscribers = subscriber::all();
        $blogcount = blog::count();
        $activeblogcount = blog::where('active', 1)->count();
        $subscribercount = subscriber::count();

        $param = ['blogcount' => $blogcount, 'subscribercount' => $subscribercount, 'activeblogcount' => $activeblogcount, 'blogs' => $blogs, 'subscribers' => $subscribers];
        return view('home', $param);
        // return $activeblogcount;
    }
    public function ablogs()
    {
        $blogs = blog::all();
        $param = ['blogs' => $blogs];
        return view('pages/ablogs', $param);
    }

    public function thecategory()
    {
        $categories = blog_category::all();
        $param = ['categories' => $categories];
        return view('pages/thecategory', $param);
    }

    public function thesubcategory()
    {
        $categories = blog_category::all();
        $subcategories = blog_subcategory::join('blog_categories', 'blog_subcategories.parent_category', '=', 'blog_categories.id')->select('blog_subcategories.*', 'blog_categories.name')->get();
        $param = ['categories' => $categories,'subcategories' => $subcategories];
        return view('pages/thesubcategory', $param);
        // return $subcategories;
    }

    public function subscriber()
    {
        $subscribers = subscriber::all();
        $param = ['subscribers' => $subscribers];
        return view('pages/subscriber', $param);
    }
    public function reports()
    {
        $reports = report::all();
        $param = ['reports' => $reports];
        return view('pages/reports', $param);
    }
    public function email()
    {
        $subscribers = subscriber::all();
        $param = ['subscribers' => $subscribers];
        return view('pages/email',$param);
    }
   

    public function addCategory(Request $req)
    {
        $blog = new blog_category;
        $blog->name =  $req->get('name');
        $blog->save();
        return redirect()->back();
        // return $user->active;
    }

    public function addSubcategory(Request $req)
    {
        $blog = new blog_subcategory;
        $blog->sname =  $req->get('name');
        $blog->parent_category =  $req->get('category');
        $blog->save();
        return redirect()->back();
        // return $user->active;
    }

 
    public function changeCategoryStatus(int $id){
        $category = blog_category::find($id);
        $category->active =  !($category->active);
        $category->save();
        return redirect()->back();
    }

    public function changeSubcategoryStatus(int $id){
        $subcategory = blog_subcategory::find($id);
        $subcategory->active =  !($subcategory->active);
        $subcategory->save();
        return redirect()->back();
    }

    public function sendmail(Request $req)
    {
        $to_email = explode('----',$req->get('emails'));
        $data = [
            "title" => $req->get('title'),
            "body" => $req->get('content')
        ];
        Mail::send('mail.contactmail', $data, function ($message) use ($to_email) {
            $message->to($to_email)
                ->from('iamtest@gmail.com', 'Test Name');
            $message->subject('Subject');
        });
        return redirect('subscriber')->with('success', 'Emails Sent Successfully');
    }

    function previewmail($mailname){
        return view('mail.'.$mailname);
        
    }



    // Save userdata to database 
    public function saveUserData(Request $req)
    {
        $user = Auth::user();
        $user->name = $req->get('name');
        $user->email = $req->get('email');
        $user->password = bcrypt($req->get('password'));
        $user->save();
        return redirect()->back();
    }
    











}
