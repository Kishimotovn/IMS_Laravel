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
    <div class="row">
        <div class="container">
            {!! Form::open(['url' => 'students']) !!}
            <div class="row">
                <div class="form-group col-xs-7">
                    {!! Form::label('firstname', 'First name:') !!}
                    {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-xs-5">
                    {!! Form::label('lastname', 'Last name:') !!}
                    {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-xs-12">
                    {!! Form::label('dob', 'DoB:') !!}
                    {!! Form::input('date', 'dob', null, ['class' => 'form-control', 'placeholder' => 'Date']) !!}
                </div>
                <div class="form-group col-xs-12">
                    {!! Form::label('school', 'School:') !!}
                    {!! Form::text('school', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-xs-12">
                    {!! Form::label('email', 'Email:') !!}
                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-xs-12">
                    {!! Form::label('telephone', 'Phone number:') !!}
                    {!! Form::text('telephone', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-xs-12">
                    {!! Form::submit('Add Student', ['class' => 'btn btn-primary form-control']) !!}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop
