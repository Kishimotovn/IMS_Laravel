@extends('masterLayout')

@section('content')
    <div class="row">
        <div class="container">
            <div class="col-sm-12">
                <div class="page-header">
                    <h1>Update {{$person->firstname}}'s Info <small>Fill in the form below</small></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h2>Login information:</h2>
    </div>
    {!! Form::model($person, ['method' => 'PATCH', 'url' => 'users/'.$person->id]) !!}
    @include('users.form', ['submitBtnLabel' => 'Update User'])
    {!! Form::close() !!}

    @include('errors.list')
@stop