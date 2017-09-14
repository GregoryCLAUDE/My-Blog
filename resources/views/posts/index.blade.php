@extends('layout.master')

@section('content')

   <div class="col-12 col-md-9">
     <p class="float-right d-md-none">
       <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">Toggle nav</button>
     </p>
     <div class="jumbotron">
       <h1>My Blog</h1>
       <p>Ce blog vous présenteras des tests de jeux, des soluces complètes, des aides pour avancer... Le rootkit d'un gamer </p>
     </div>
     <div class="row">
       @foreach ($posts as $post)
        @include('posts.post')
      @endforeach
     </div><!--/row-->
   </div><!--/span-->


@endsection
