@extends('layouts.master')

@section('content')
  <div class="col-sm-8 blog-main">
    <br />
    <h3 class="text-left">Publish a post</h3>
    <hr />
    <form method="post" action="/posts" class="form-horizontal">
        {{ csrf_field() }}
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputEmail3" name="title" placeholder="Title" >
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Body</label>
        <div class="col-sm-10">
          <textarea type="text" class="form-control" id="body" placeholder="Body" name="body" ></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary">Publish</button>
        </div>
      </div>


      @include('layouts.errors')

    </form>
  </div>

@endsection
