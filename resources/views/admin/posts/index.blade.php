@extends('layouts.app')


@section('content')
    <div class="panel panel-default">
    </div>
    <div class="panel-heading">Posts</div>
    <div class="panel-body">
    <table class="table table-hover">
    <thead>
    <th>
    Image
    </th>
    <th>
    Title
    </th>

    <th>
   Edit   
    </th>

    <th>
    Trash
    </th>
    
    </thead>
    <tbody>
    @foreach($posts as $post)
    <tr>
    <td>
   <img src="{{ url($post->featured) }}" alt="{{ $post->title }}"width="90px" height="90px">
    </td>
    <td>
    {{$post->title}}
    </td>

 <td>Edit</td>
<td> <a href="{{ route('post.delete',['id'=>$post->id]) }}" class="btn btn-danger">Trash</a>
</td>
    </tr>
    @endforeach
    </tbody>
    </table>
    
    </div>
@stop



       