@extends('masterLayout)

@section('content')
    <div class="row">
        <div class="container">
            <div class="col-sm-12">
                <div class="page-header">
                    <h1>Create a Company <small>Fill in the form below</small></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            {!! Form::open(['url' => 'companies']) !!}
            <div class="row">
                <div class="form-group col-xs-12">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-xs-12">
                    {!! Form::label('website', 'Website:') !!}
                    {!! Form::text('website', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-xs-12">
                    {!! Form::submit('Add Company', ['class' => 'btn btn-primary form-control']) !!}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop