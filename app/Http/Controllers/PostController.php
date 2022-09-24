<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('index')->with(['post' => $post->get()]); 
    }
    
    public function mypage(Post $post)
    {
        return view('mypage')->with(['post' => $post->get()]); //return view('mypage')->with(['posts' => $post ->getPaginateByLimit()]);
    }
    
}