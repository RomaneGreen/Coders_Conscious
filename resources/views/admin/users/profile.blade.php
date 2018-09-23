@extends('layouts.app')

@section('content')

@include('admin.includes.errors')


<div class="panel panel-default">
Edit your profile
</div>

<div class="panel-body">
<form action="{{route('user.profile')}}"method= "post">
{{csrf_field()}}

<div class="form-group">
<label for="name" class="for">Name</label>
<input type="text" name = 'name' class="form-control">

@extends('layouts.app')

@section('content')

@include('admin.includes.errors')


<div class="panel panel-default">
                <div class="panel-heading">
                                Edit your profile
                          </div>


<div class="panel-body">
<form action="{{route('user.store')}}"method= "post">
{{csrf_field()}}

<div class="form-group">
<label for="name" class="for">Name</label>
<input type="text" name = 'name' class="form-control">

<div class="form-group">
        <label for="name" class="for">Email</label>
        <input type="email" name = 'email' class="form-control">

        @extends('layouts.app')

@section('content')

@include('admin.includes.errors')


<div class="panel panel-default">
Edit your profile
</div>

<div class="panel-body">
<form action="{{route('user.profile.update')}}"method= "post" enctype="multipart/form-data">
{{csrf_field()}}

<div class="form-group">
<label for="name" class="for">Username</label>
<input type="text" name = 'name' value={{$user->name}} class="form-control">

<div class="form-group">
<label for="name" class="for">Email</label>
<input type="email" name = 'email' value={{$user->email}} class="form-control">

<div class="form-group">
 <label for="name" class="for">New Password</label>
 <input type="password" name = 'password' class="form-control">

 <div class="form-group">
<label for="name" class="for">Upload new avatar</label>
<input type="file" name = 'avatar' class="form-control">

<div class="form-group">
 <label for="name" class="for">Facebook profile</label>
<input type="text" name = 'facebook' value="{{$user->profile->facebook}}"class="form-control">

 <div class="form-group">
<label for="name" class="for">Youtube Profile</label>
 <input type="text" name = 'youtube'value="{{$user->profile->youtube}}" class="form-control">

 <div class="form-group">
        <label for="about" class="for">About you</label>
        <textarea name="about" id="" cols="6" rows="6" class="form-control">{{$user->profile->about}}</textarea>
       


<div class = "form-group">
<div class = "text-center">
<button class = "btn btn-success" type = "submit">Update Profile</button>
</div>
</div>
</form>
</div>
@stop

<div class = "form-group">
<div class = "text-center">
<button class = "btn btn-success" type = "submit">Add User</button>
</div>
</div>
</form>
</div>
@stop


<div class = "form-group">
<div class = "text-center">
<button class = "btn btn-success" type = "submit"> Update Profile</button>
</div>
</div>
</form>
</div>
</div>
@stop