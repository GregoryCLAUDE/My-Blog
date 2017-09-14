@extends('layout.master')


@section('content')

  <div class="col-12 col-md-9">
    <div class="jumbotron">
      <h1>Create a new post</h1>
      <hr>

      <form method="POST" action="/posts">

      {{ csrf_field() }}

        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="title">
        </div>

        <div class="form-group">
          <label for="shortDescription"></label>
          <textarea name="shortDescription" id="shortDescription" class="form-control" placeholder="short description"></textarea>
        </div>

        <div class="form-group">
          <label for="body"></label>
          <textarea name="body" id="body" class="form-control" rows="10" placeholder="text"></textarea>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Publish</button>
        </div>

      </form>

      @include ('layout.errors')

    </div>
  </div><!--span-->

@endsection
