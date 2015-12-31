@extends('masterLayout')

@section('content')
    <div class="row">
        <div class="container">
            <div class="col-sm-12">
                <div class="page-header">
                    <h1>Add new post: </h1>
                </div>
            </div>
        </div>
    </div>
    {!! Form::open(['url' => 'posts']) !!}
    @include('posts.form', ['submitBtnLabel' => 'Add Post'])
    {!! Form::close() !!}

    @include('errors.list')
@stop
