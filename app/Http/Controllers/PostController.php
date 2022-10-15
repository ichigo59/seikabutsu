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
    
    public function show(Post $post)
    {
        return view('show')->with(['post' => $post]);
    }
    
    public function ichiran(Post $post)
    {
        return view('ichiran')->with(['posts' => $post->getPaginateByLimit()]);
    }
    
    public function mypage(Post $post)
    {
        return view('mypage')->with(['post' => $post->get()]);
    }
    
    public function create()                
    {
        return view ('create');
    }
    
    public function upload()                
    {
        return view ('store');
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
        //dd("test");
        $input = $request['post'];
        $input += ['user_id' => $request->user()->id]; 
        $imgname = $request->imgpath->getClientOriginalName();
        $post['image_path'] = $request->imgpath->storeAs('public',$imgname);
        $post->fill($input)->save();
        return redirect('/show/' . $post->id);
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $input_post += ['user_id' => $request->user()->id];   
        $post->fill($input_post)->save();
        return redirect('/posts/' . $post->id);
    }
}