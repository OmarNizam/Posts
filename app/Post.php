<?php

namespace App;



class Post extends Model
{
  // We specified that the post has many comments
  public function comments()
  {
    return $this->hasMany(Comment::class);
  }


  public function user() {
    return $this->belongsTo(User::class);
  }


  public function addComment($body)   // comment body
  {
    $this->comments()->create(compact('body'));
  }
}
