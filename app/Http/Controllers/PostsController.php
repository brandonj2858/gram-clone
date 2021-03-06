<?php

namespace App\Http\Controllers;
use App\Post;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class PostsController extends Controller
{
  //Makes the post route require auth
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
      $users = auth()->user()->following()->pluck('profiles.user_id');
      $posts = Post::whereIn('user_id', $users)->orderBy('date_created', 'DESC')->get();
      return view('posts.index', compact('posts'));
    }



    public function create()
    {
      return view('posts.create');
    }

    public function show(\App\Post $post)
    {
      return view('posts.show', compact('post'));
    }

    public function store(Request $request)
    {


      $this->validate($request,[
        'caption' => 'required',
        'image' => 'required',

      ]);

      $data = ($request->all());


      auth()->user()->posts()->create($data);

      return redirect ('/profile/'. auth()->user()->id);

    }

}
