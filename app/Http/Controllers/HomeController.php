<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function showAbout()
    {
        return view('about');
    }

    public function showBlog()
    {
        $posts = Post::orderBy('created_at', 'DESC')->paginate(3);
        return view('blog',compact('posts'));
    }

    public function showOurTeam()
    {
        return view('teams');
    }


    public function showImagesOne(){
        
        return view("gallary");
    }


    public function showImagesTwo(){
        
        return view("fieldwork");
    }


    public function showContact()
    {
        return view('contactus');
    }

   
}
