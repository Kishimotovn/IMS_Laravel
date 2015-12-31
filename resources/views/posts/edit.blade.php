@extends('masterLayout')

@section('content')
    <div class="row">
            <div class="container">
                <div class="col-sm-12">
                    <div class="page-header">
                        <h1>Update post: </h1>
                    </div>
                </div>
            </div>
    </div>
    {!! Form::model($post, ['method' => 'PATCH', 'url' => 'posts/'.$post->id]) !!}
    @include('posts.form', ['submitBtnLabel' => 'Update Post'])
    {!! Form::close() !!}

    @include('errors.list')
@stop