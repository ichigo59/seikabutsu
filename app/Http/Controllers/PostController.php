<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use Cloudinary;


class PostController extends Controller
{
    
    public function index(Post $post)
    {
        return view('index')->with(['post' => $post->get()]); 
        //return view('home', ['comments' => $comments]);
    }

    /*public function index()
    {
        $comments =Comment::get();
        //dd($comments);
        return view('index',
        ['comments' => $comments]);
    }*/
    
    public function home()
    {
        $comments =Comment::get();
        //dd($comments);
        return view('home',
        ['comments' => $comment]);
    }
    
    public function show(Post $post)
    {
        return view('show')->with(['post' => $post]);
    }
    
    public function ichiran(Post $post)
    {
        return view('ichiran')->with(['posts' => $post->getPaginateByLimit()]);
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
        $comments = Comment::get();
        return view ('User/Components/chat')-> with(['comments' => $comments]) ;
    }
    
    public function comment()
    {
        return view ('User/Components/comment');
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
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function cloudinary()
    {
        return view('cloudinary');  //cloudinary.blade.phpを表示
    }

    public function cloudinary_store(Request $request)
    {
        //cloudinaryへ画像を送信し、画像のURLを$image_urlに代入している
        $image_url = Cloudinary::upload($request->file('imgpath')->getRealPath())->getSecurePath();
        //dd($image_url);  //画像のURLを画面に表示
    }
    
    public function update(Request $request, Post $post)
    {
        $input_post = $request['post'];
        $input_post += ['user_id' => $request->user()->id];   
        $post->fill($input_post)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function add(Request $request)
    {
        $user = Auth::user();
        $comment = $request->input('message');
        Comment::create([
            'login_id' => $user->id,
            'name' => $user->name,
            'comment' => $comment
        ]);
        
        return redirect('/posts/chat/');
    }
}