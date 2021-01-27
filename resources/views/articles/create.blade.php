@extends('layout')

@section('content')

<!-- <form action="/articles/create" method="POST">
@csrf
	<label for="title">Article Title</label><br /> 
	<input name="title" type="text" id="title"/> <br /> 

    <label for="content">Article Content</label><br /> 
	<textarea cols="30" rows="2" name="content" id="content"></textarea><br /> 
	
	<button type="submit" value="Submit">Submit</button>
</form> -->

<form action="/articles/create" method="POST">
@csrf
<div class="mb-3">
  <label for="title" class="form-label">Title</label>
  <input type="text" class="form-control" id="title" name="title" placeholder="Article Title">
</div>
<div class="mb-3">
  <label for="content" class="form-label">Article Content</label>
  <textarea class="form-control" id="content" rows="3" name="content"></textarea>
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>

@endsection