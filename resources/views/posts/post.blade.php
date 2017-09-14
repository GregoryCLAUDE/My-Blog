<div class="col-6 col-lg-4">
  <h2>{{ $post->title }}</h2>

  
  <p class="blog-post-title">{{ $post->created_at->toFormattedDateString()}}</p>
  <p class="blog-post-meta">{{ $post->shortDescription }} </p>
  <p><a class="btn btn-primary" href="/posts/{{$post->id}}" role="button">View details &raquo;</a></p>
</div><!--/span-->
