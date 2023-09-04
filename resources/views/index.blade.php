@extends ('base')
@section('title')
LISTE DES ARTICLES
@endsection

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Desciption</th>
      <th scope="col">Prix</th>
    </tr>
  </thead>
  <tbody>
    @foreach($articles as $article)
        <tr>
        <th scope="row">{{ $article->id }}</th>
        <td>{{ $article->nom }}</td>
        <td>{{ $article->description }}</td>
        <td>{{ $article->prix }}</td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection