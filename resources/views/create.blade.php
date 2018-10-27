@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a Post</div>

                <div class="card-body">
                    @if ($message = Session::get('danger'))
                        <div class="alert alert-danger" >
                           <strong>{{$message}}</strong>
                        </div>
                    @endif
                    <form action="{{ action('PostController@store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="Name">Title</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Title">    
                    </div>                    
                    <div class="form-group">
                            <label for="Name">Detail</label>
                            <textarea name="detail" id="detail" class="form-control" placeholder="Description"></textarea>    
                    </div>                    
                    <div class="form-group">
                            <label for="Name">Author</label>
                            <input type="text" name="author" id="author" class="form-control" placeholder="Author">    
                    </div>                    
                     <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
