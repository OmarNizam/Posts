<div class="blog-post">
  <div class="col-sm-9 blog-main">
    <a href="/posts/{{ $post->id }}" class="blog-post-title">{{ $post->title }}</a>

    <p class="blog-post-meta">
      {{ $post->user->name }} on
      {{ $post->created_at->toFormattedDateString() }}</p>

    <p>{{ $post->body }}</p>

    <hr />

    <h5>Comments:</h5>


    <div class="comments">
      <ul class="list-group">
        @foreach ($post->comments as $comment)
          <li class="list-group-item">
            <strong>
               on
              {{ $comment->created_at->diffForHumans() }} : &nbsp;
            </strong>
            {{ $comment->body }}
          </li>
        @endforeach
      </ul>
    </div>


  {{-- Add A Comment  --}}
    <form method="post" action="/posts/{{ $post->id }}/comments">
      {{ csrf_field() }}
      <div class="form-group">
        <textarea class="form-control" name="body" placeholder="Your comment is here..."></textarea>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary">Add comment</button>
        </div>
      </div>
    </form>
@include('layouts.errors')
  </div>
</div>
