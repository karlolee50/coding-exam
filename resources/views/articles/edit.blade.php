@extends('layout')


@section('content')

<form action="/articles/{{ $article->id }}/edit" method="POST">
@csrf
@method('PUT')
<div class="mb-3">
	<label for="title" class="form-label">Article Title</label><br /> 
	<input name="title" type="text" id="title" value="{{ $article->title }}" class="form-control"/> <br /> 
</div>
<div class="mb-3">
    <label for="content" class="form-label">Article Content</label><br /> 
	<textarea cols="30" rows="2" name="content" id="content" class="form-control"> {{ $article->content }} </textarea><br /> 

	<button type="submit" value="Submit" class="btn btn-primary">Update</button>
    </div>
</form>

@endsection