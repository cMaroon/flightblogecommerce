@extends('layout')

@section('content')
    

    @if ($message = Session::get('success'))

        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
        
    @endif
<div class="row">
    <div class="col-md-6">
        <h1>Fast Flight Post</h1>
    </div>
    <div class="col-md-6 text-right">
        <a href="{{action('PostController@create')}}" class="btn btn-primary">Add Post</a>
    </div>
</div>


<table class="table table-bordered">
<thead>
    <tr>
        <th>No.</th>
        <th>Title</th>
        <th>Detail</th>
        <th>Author</th>
        <th>Modify</th>
    </tr>
</thead>
<tbody>
    @foreach ($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->detail}}</td>
            <td>{{$post->author}}</td>
            <td>
            <form action="{{action('PostController@destroy',$post->id)}}" method="post">
            <a href="{{action('PostController@show',$post->id)}}" class="btn btn-info">Show</a>
            <a href="{{action('PostController@edit',$post->id)}}" class="btn btn-warning">Edit</a>

            <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>

        </tr>
    @endforeach
</tbody>
</table>

@endsection