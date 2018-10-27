@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit a Post</div>

                <div class="card-body">
                    @if ($message = Session::get('danger'))
                        <div class="alert alert-danger" >
                           <strong>{{$message}}</strong>
                        </div>
                    @endif
                @foreach ($posts as $post)
                <form action="{{ action('PostController@update'),$post->id }}" method="post">
                        @csrf
                        @method('PUT ')
                        <div class="form-group">
                            <label for="Name">Title</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Title" value="{{$post->name}}">    
                        </div>                    
                        <div class="form-group">
                                <label for="Name">Detail</label>
                                <textarea name="detail" id="detail" class="form-control" placeholder="Description">{{$post->detail}}</textarea>    
                        </div>                    
                        <div class="form-group">
                                <label for="Name">Author</label>
                                <input type="text" name="author" id="author" class="form-control" placeholder="Author" value="{{$post->author}}">    
                        </div>                    
                         <button class="btn btn-warning" type="submit">Update</button>
                        <a href="{{ action('PostController@index')}}" class="btn btn-default">Back</a>
                        </form>
                @endforeach
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
