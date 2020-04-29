<h1>
  Listagem dos posts
  <a href="{{ route('posts.create') }}">ADD</a>
</h1>

@foreach ($posts as $post)
  <p>{{ $post->title }}</p>
@endforeach