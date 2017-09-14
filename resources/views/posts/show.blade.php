@extends('layout.master')

@section('content')
    <div class="col-12 col-md-9">
      <div class="jumbotron">
        <h1>{{$post->title}}</h1>
      </div>
      <div >
        <p>{{$post->shortDescription}}</p>
      </div>
        <p>{{$post->body}}</p>

        <div class="comment">

          @foreach ($post->comments as $comment)

            <article>

              {{comment->body}}

            </article>

          @endforeach

        </div>

    </div><!--span-->

@endsection
