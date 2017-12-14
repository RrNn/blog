<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use Carbon\Carbon;

class PostsController extends Controller
{

  public function __construct()
  {
    // $this->middleware('auth');
    $this->middleware('auth')->except(['index','show']);
  }


  public function index()
  {
    // $posts = Post::latest()
    // ->filter(request(['month','year']))
    // ->get();
   

    $posts = Post::latest();

    if($month = request('month')){

      $posts->whereMonth('created_at',Carbon::parse($month)->month);

    }

    if($year = request('year')){

      $posts->whereYear('created_at',Carbon::parse($year)->year);

    }

    $posts = $posts->get();


    return view('posts.index',compact('posts'));
  }



  public function create()
  {
    return view('posts.create');
  }

  public function show(Post $post)
  {

    return view('posts.show',compact('post'));

  }

  public function store()
  {
    $this->validate(request(),[
      'title'=>'required|min:3',
      'body'=>'required|min:6',
    ]);

    auth()->user()->publish(
      new Post(request(['title','body']))
    ); 

    return redirect('/');
  }

  public function edit(Post $post)
  {

    return view('posts.edit',compact('post'));

  }

  public function update(Request $request, Post $post)
  {

    $this->validate($request,[
      'title'=>'required|min:3',
      'body'=>'required|min:6'
    ]);

    $post->update([
      'user_id'=> auth()->user()->id,
      'title'=> $request->title,
      'body'=> $request->body
    ]);
    
    return redirect('/');
  }

  public function destroy(Request $request)
  {
    Post::find($request->post_id)->delete();
    return redirect('/');
  }
}



