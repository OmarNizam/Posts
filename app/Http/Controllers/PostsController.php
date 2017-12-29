<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostsController extends Controller
{

  public function index() {

    $posts = Post::orderBy('created_at', 'desc')->get();

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

    Post::create(request(['title', 'body']));

    // redirect to the home page
    return redirect('/');



  }
}
