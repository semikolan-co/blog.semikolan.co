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
    public function addblog()
    {
        $param = [
            "blog" => [
                "id"=>'',
                "title" => '',
                'slug'=>'',
                'tags'=>'',
                'category'=>'',
                'readtime'=>'',
                'subcategory'=>'',
                "active" => 1,
                "content" => '',
                "author" => ''
            ],
            "way" => 'Add',
            "categories" => blog_category::where('active',1)->get()
        ];
        return view('pages/editblog', $param);
        // return $param;
    }
    public function edit(int $id)
    {

        $matchThese = ['id' => $id];
        $blog = blog::where($matchThese)->get();
        $blog = $blog[0];
        $param = [
            "blog" => $blog,
            "way" => 'Edit',
            "categories" => blog_category::where('active',1)->get()
        ];
        return view('pages/editblog', $param);
    }

    public function addblogtodb(Request $req)
    {
        $blog = new blog;
        $blog->title =  $req->get('title');
        $blog->author =  Auth::user()->name;
        $blog->slug =  $req->get('slug');
        $blog->tags =  $req->get('tags');
        $blog->category =  $req->get('category');
        $blog->readtime =  $req->get('readtime');
        $blog->subcategory =  $req->get('subcategory');
        $blog->active =  ($req->get('active') == 'on') ? 1 : 0;
        $blog->content =  $req->get('content');
        $blog->image =  "image_name.png";
        $blog->save();
        return redirect(route('edit', ['id' => $blog->id]));
        // return $user->active;
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

    public function editblog(int $id,Request $req)
    {
        $blog = blog::find($id);
        $blog->title =  $req->get('title');
        $blog->author =  Auth::user()->name;
        $blog->slug =  $req->get('slug');
        $blog->tags =  $req->get('tags');
        $blog->category =  $req->get('category');
        $blog->readtime =  $req->get('readtime');
        $blog->subcategory =  $req->get('subcategory');
        $blog->active =  ($req->get('active') == 'on') ? 1 : 0;
        $blog->content =  $req->get('content');
        $blog->image =  "image_name.png";
        $blog->save();
        return redirect(route('edit', ['id' => $blog->id]));
        // return $user->active;
    }


    public function changeBlogStatus(int $id){
        $blog = blog::find($id);
        $blog->active =  !($blog->active);
        $blog->save();
        return redirect()->back();
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
}
