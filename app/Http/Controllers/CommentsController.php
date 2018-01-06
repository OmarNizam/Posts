<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;

class CommentsController extends Controller
{

    public function store(Post $post)
    {
      // validations
      $this->validate(request(), [
        'body' => 'required|min:2'
      ]);
      // Add a comment to a post
      $post->addComment([
        'body' => request('body'),
      ]);   // you find this new method in the Post.php // pass throw the function the request body

      return back();  // redirect stay at the same page
    }

}
