<?php

namespace App\Http\Controllers\User;

use App\Blog;
use App\BlogCats;
use App\BlogComment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index(){
        $table = Blog::orderBy('created_at','DESC')->with(['category', 'user'])->paginate(15);
        $category = BlogCats::orderBy('name','ASC')->get();
        $blog = Blog::orderBy('created_at','DESC')->paginate(5);
        return view('user.blog')->with(['table' => $table,'category' => $category,'blog' => $blog]);
    }

    public function category_wise($id){
        $category = BlogCats::orderBy('name','ASC')->get();
        $table = Blog::orderBy('created_at','ASC')->where('blogcatID',$id)->get();
        $blog = Blog::orderBy('created_at','DESC')->paginate(5);
        return view('user.category_wise')->with(['table' => $table,'category' => $category,'blog' => $blog]);
    }

    public function single_blog($id){
        $table = Blog::find($id);
        $category = BlogCats::orderBy('name','ASC')->get();
        $comment = BlogComment::where('blogID',$id)->get();
        $blog = Blog::orderBy('created_at','DESC')->paginate(5);
        return view('user.single_blog')->with(['table' => $table,'category' => $category,'comment' => $comment,'blog' => $blog]);
    }


    public function comment(Request $request){
        //dd($request->all());
        $table = new BlogComment();
        $table->name = $request->name;
        $table->email = $request->email;
        $table->blogID = $request->blogID;
        $table->comment = $request->comment;
        $table->save();
        return redirect()->back();
    }

}
