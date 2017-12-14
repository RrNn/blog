<div class="blog-post">

  <h2 class="blog-post-title">

    <a href="/posts/{{$post->id}}">

      {{ $post->title }}

    </a>

    @if(auth()->check() && $post->user_id == auth()->user()->id)

    <span class="float-right d-flex">

      <a href="/posts/{{$post->id}}/edit" class="btn text-info">Edit</a>&nbsp;

      <form method="POST" action="/posts/{{$post->id}}/delete">

        {{ csrf_field() }}

        {{ method_field('DELETE') }}

        <input type="hidden" name="post_id" value="{{$post->id}}">

        <button class="btn text-danger btn-link">Delete</button>

      </form>

    </span>

    @endif

  </h2>

  <p class="blog-post-meta">

    {{ $post->created_at->toFormattedDateString() }}

  </p>

  <p> {{ $post->body }}</p>

</div>
