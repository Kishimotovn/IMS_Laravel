@extends('masterLayout')

@section('content')
    <div class="row">
        <div class="container">
            <div class="col-sm-12">
                <div class="page-header">
                    <h1>Create a Student <small>Fill in the form below</small></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h2>Login information:</h2>
    </div>
    {!! Form::open(['url' => 'users', 'files' => true]) !!}
    @include('users.form',['submitBtnLabel' => 'Add User'])
    {!! Form::close() !!}

    @include('errors.list')
@stop
