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
        return view('mypage')->with(['post' => $post->get()]);
    }
    
    public function create()                //Q. ->with(['post' => $post->get()]); と書く時とそうでない時の違い
    {
        return view ('create');
    }
    
    public function login()
    {
        return view ('login');
    }
    
    public function start()
    {
        return view ('start');
    }
    
    public function chat()
    {
        return view ('chat');
    }
    
    public function review()
    {
        return view ('review');
    }
    
    public function register()
    {
        return view ('registert');
    }
    
    public function explanation()
    {
        return view ('explanation');
    }
    
    public function store(Request $request, Post $post)
    {
    $input = $request['post'];
    $post->fill($input)->save();
    return redirect('/posts/' . $post->id);
    }
}