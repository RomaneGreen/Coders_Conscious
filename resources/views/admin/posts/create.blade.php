@extends('layouts.app')

@section('content')

@if(count($errors)> 0)
<ul class = "list-group">
@foreach($errors->all() as $error)
<li class = "list-group-item text-danger">
{{$error}}
</li>
@endforeach
</ul>
@endif


<div class="panel panel-default">
create new post
</div>

<div class="panel-body">
<form action="{{route('post.store')}}"method= "post" enctype="multipart/form-data">
{{csrf_field()}}

<div class="form-group">
<label for="title" class="for">Title</label>
<input type="text" name = 'title' class="form-control">
</div>

<div class="form-group">
<label for="title" class="for">Featured image</label>
<input type="file" name = 'featured' class="form-control">
</div>

<div class="form-group">
<label for="title" class="for">Content</label>
<textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
</div>

<div class="form-group">
<div class="text-center">
<button class="btn btn-success" type="submit">Store post</button>
</div>
</div>
</form>
</div>
@stop
