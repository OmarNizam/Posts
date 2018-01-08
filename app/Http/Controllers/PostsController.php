<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PostsController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth')->except(['index', 'show']);
  }

  public function index() {

    // $posts = Post::latest()
    //                   ->filter(request(['month', 'year']))
    //                   ->get();

    $posts = Post::orderBy('created_at', 'desc');

    if ($month = request('month')) {
      $posts->whereMonth('created_at', Carbon::parse($month)->month);
    }

    if ($year = request('year')) {
      $posts->whereYear('created_at', $year);
    }

    $posts = $posts->get();



      //return $archives;

    return view('posts.index', compact('posts'));
  }


  public function show(Post $post) {

    return view ('posts.show', compact('post'));
  }


  public function create() {

    return view ('posts.create');
  }


  public function store() {
    // end the execution and dump all the request data

    //dd(request()->all());

    // before create the post we need to validate the data
    $this->validate(request(), [
      'title' => 'required',
      'body' => 'required'
    ]);

    // create a new post using the request data
    //$post = new Post;
/*
    $post->title = request('title');
    $post->body = request('body');

    /// save it in the database
    $post->save();
*/
// other way to create the post using the request data  (it will ceated to you and save it too )
// but you need to set up a Model

    Post::create([
      'title' => request('title'),
      'body' => request('body'),
      'user_id' => auth()->id()
    ]);

    // redirect to the home page
    return redirect('/');



  }
}
