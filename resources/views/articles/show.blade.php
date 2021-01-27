@extends('layout')


@section('content')

<table class="table">
<thead>
  <tr>
    <th scope="col">Title</th>
    <th scope="col">Full Content</th>
    <th scope="col">Created Date</th>
    <th scope="col">Number of Votes</th>
    <th scope="col">Action</th>
  </tr>
</thead>
<tbody>
        <tr>
            <td scope="col">{{ $article->title }}</td>
            <td scope="col"> {{ $article->content }} </td>
            <td scope="col"> {{ $article->created_at->format('m/d/Y') }} </td>
            <td scope="col"> {{ $article->votes }} </td>
            <td scope="col">
            
                <form action="/articles/{{ $article->id }}/upvote" method="POST">
                @csrf
                @method('PUT')
                    <button type="submit" class="btn btn-success"> Upvote </button>
                </form>

                @if( $article->votes >= 1 )
                    <form action="/articles/ {{ $article->id }}/downvote" method="POST">
                    @csrf
                    @method('PUT')
                        <button type="submit" class="btn btn-info"> Downvote </button>
                    </form>
                @else
                @endif
            </td>
        </tr>
</tbody>
</table>


@endsection