<h1>Add Novo Post</h1>

<form action="{{ route('posts.store') }}" method="post">
  {!! csrf_field() !!}
  <input type="text" name="title" placeholder="Título">
  <textarea name="body" placeholder="Conteúdo"></textarea>
  <button type="submit">Enviar</button>
</form>