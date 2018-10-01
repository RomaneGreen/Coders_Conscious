@extends('layouts.app')

@section('content')

@include('admin.includes.errors')


<div class="panel panel-default">
Create new Tag
</div>

<div class="panel-body">
<form action="{{route('tag.store')}}"method= "post">
{{csrf_field()}}

<div class="form-group">
<label for="name" class="for">Tag</label>
<input type="text" name = 'tag' class="form-control">
<div class = "form-group">
<div class = "text-center">

<button class = "btn btn-success" type = "submit">Create new Tag</button>
</div>
</div>
</form>
</div>
@stop