<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Comment;
use Illuminate\Support\Facades\Auth;


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
    
    
    public function store(Request $request ,Post $post) 
    {
        $input = $request['post'];
        $post->fill($input);
        $file_name = $request->file('imgpath')->getClientOriginalName(); /*保存時の画像の名前デフォルト*/
        $image = $request->file('imgpath')->storeAs('public', $file_name);/*storageフォルダ→app→public*/
        $post->imgpath = "/storage/" . $file_name;/*読みだす前のパス指定　storageと指定する*/
        $post->user_id = Auth::id();/*追加*/
        $post->save();

        return redirect('/show/' . $post->id); /*webの{post}と同じ意味*/
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