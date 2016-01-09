@extends('masterLayout')

@section('content')
    <div class="row">
        <div class="container">
            <div class="col-sm-12">
                <div class="page-header">
                    <h1>List of Posts <small><a href="{{url('posts/create')}}" role="button">Create new Post</a></small></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($posts as $post)
            <div class="row">
                <div class="container">
                    <div class="col-xs-2">
                        <a href="#" class="thumbnail">
                            <img src="http://placehold.it/300x300" alt="Placeholder">
                        </a>
                    </div>
                    <div class="col-xs-4">
                        <div class="caption">
                            <h3>{{$post -> title}}</h3>
                            <p>{{$post->body}}</p>
                            <p>
                                <a href={{url('posts/'.$post->id)}} class="btn btn-primary" role="button">Read more</a>
                                <a href={{url('posts/'.$post->id).'/edit'}} class="btn btn-primary" role="button">Edit</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <hr/>
        @endforeach
    </div>
@stop