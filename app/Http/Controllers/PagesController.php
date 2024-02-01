<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public  function index(){

//dd(session()->all());
        return view('index');
    }
    public  function about(){
        return view('about');
    }
    public  function service(){
        return view('service');
    }
    public  function project(){
        return view('project');
    }
//    public  function blog(){
//
//
//        return view('post.index');
//    }
    public  function single(){
        return view('single');
    } public  function contact(){
        return view('contact');
    }
public function posts(){
        $posts=Post::all();
        return view('blog',compact('posts'));
}

}
