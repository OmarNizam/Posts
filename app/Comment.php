<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;   // delete it

class Comment extends Model
{

    // I have a comment and give me the post it belong to
    // $comment -> $post
  public function post() {
    return $this->belongsTo(Post::class);
  }

  // $comment->user->name     // if you want to grap  a user name
  public function user() {
    return $this->belongsTo(User::class);
  }

}
