@extends('layout')

@section('content')

<!-- <table class="tg">
<thead>
  <tr>
    <th class="tg-0pky">Title</th>
    <th class="tg-0lax">Content Snippet</th>
    <th class="tg-0pky">Created Date</th>
    <th class="tg-0pky">Action</th>
  </tr>
</thead>
<tbody>
    @foreach($articles as $article)
        <tr>
            <td class="tg-0pky">
                <a href="/articles/ {{ $article->id }} ">    {{ $article->title }} </a>
            </td>
            <td class="tg-0lax"> {{ Str::words($article->content , 50, '...') }}</td>
            <td class="tg-0pky"> {{ $article->created_at->format('m/d/Y') }} </td>
            <td class="tg-0pky"> 
                <form action="/articles/{{ $article->id }}/edit" method="GET">
                    <button type="submit"> Edit</button>
                </form>

                <form action="/articles/ {{ $article->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"> Delete</button>
                </form>

            </td>
        </tr>
    @endforeach
</tbody>
</table> -->




<table class="table">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Content Snippet</th>
      <th scope="col">Created Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($articles as $article)
    <tr>
        <th scope="row">
            <a href="/articles/ {{ $article->id }} ">    {{ $article->title }} </a>
        </th>
        <td>
            {{ Str::words($article->content , 50, '...') }}
        </td>
        <td>
            {{ $article->created_at->format('m/d/Y') }}
        </td>
        <td>
            <form action="/articles/{{ $article->id }}/edit" method="GET">
                <button type="submit" class="btn btn-warning"> Edit</button>
            </form>

            <form action="/articles/ {{ $article->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"> Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>

<form action="/articles/create" method="GET">
    <button type="submit" class="btn btn-primary"> Create New Article</button>
</form>

@endsection