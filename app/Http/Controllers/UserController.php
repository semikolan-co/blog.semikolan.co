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

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function myblogs()
    {
        $blogs = blog::where('author',Auth::id())->get();
        $param = ['blogs' => $blogs];
        return view('pages/ablogs', $param);
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
        $blog = blog::where('id',$id)->first();
        if($blog->author != Auth::id()){
            return redirect(route('myblogs'));
        }

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
        $blog->author =  Auth::id();
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


    public function editblog(int $id,Request $req)
    {
        $blog = blog::where('id',$id)->first();
        if($blog->author != Auth::id()){
            return redirect(route('myblogs'));
        }

        $fileName = ''; 
        if(!empty($req->main_image) || $req->main_image != ''){
            $data = explode(';', $req->main_image);
            $part = explode("/", $data[0]);
            $image = $req->main_image;  // your base64 encoded
            $image = str_replace('data:image/'.$part[1].';base64,', '', $image);
            $image = str_replace(' ', '+', $image);
            $fileName = md5(microtime()) .'.'.$part[1];
            $destinationPath = base_path().'/resources/uploads/';
            Storage::disk('public')->put('/ft_img/'.$fileName, base64_decode($image));
        }




        $blog = blog::find($id);
        $blog->title =  $req->get('title');
        $blog->author =  Auth::id();
        $blog->slug =  $req->get('slug');
        $blog->tags =  $req->get('tags');
        $blog->category =  $req->get('category');
        $blog->readtime =  $req->get('readtime');
        $blog->subcategory =  $req->get('subcategory');
        $blog->active =  ($req->get('active') == 'on') ? 1 : 0;
        $blog->content =  $req->get('content');
        if ($fileName) {
            $blog->image =  $fileName;
        }
        $blog->save();
        return redirect(route('edit', ['id' => $blog->id]));
        // return $user->active;
    }


    public function changeBlogStatus(int $id){
        $blog = blog::where('id',$id)->first();
        if($blog->author != Auth::id()){
            return redirect(route('myblogs'));
        }
        $blog = blog::find($id);
        $blog->active =  !($blog->active);
        $blog->save();
        return redirect()->back();
    }


    // save user to 





}
