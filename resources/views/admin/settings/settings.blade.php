@extends('layouts.app')

@section('content')

@include('admin.includes.errors')


<div class="panel panel-default">
Edit blog settings
</div>

<div class="panel-body">
<form action="{{route('settings.update')}}"method= "post">
{{csrf_field()}}

<div class="form-group">
<label for="site_name" class="for">Site Name</label>
<input type="text" name = 'site_name' value="{{$settings->site_name}}" class="form-control">

<div class="form-group">
        <label for="contact_email" class="for">Contact Email</label>
        <input type="email" name = 'contact_email'value ="{{$settings->contact_email}}" class="form-control">

<div class="form-group">
    <label for="contact_number" class="for">Contact number</label>
    <input type="text" name = 'contact_number'value ="{{$settings->contact_number}}" class="form-control">

<div class="form-group">
    <label for="contact_address" class="for">Address</label>
    <input type="text" name = 'address'value ="{{$settings->address}}" class="form-control">

<div class = "form-group">
<div class = "text-center">
<button class = "btn btn-success" type = "submit">Update settings</button>
</div>
</div>
</form>
</div>
@stop