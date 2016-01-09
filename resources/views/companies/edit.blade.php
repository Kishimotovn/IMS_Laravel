@extends('masterLayout')

@section('content')
    <div class="row">
        <div class="container">
            <div class="col-sm-12">
                <div class="page-header">
                    <h1>Edit {{$company->name}} <small>Fill in the form below</small></h1>
                </div>
            </div>
        </div>
    </div>
    {!! Form::model($company, ['method' => 'PATCH','url' => 'companies/'.$company->id]) !!}
    @include('companies.form', ['submitBtnLabel' => 'Update Company'])
    {!! Form::close() !!}

    @include('errors.list')
@stop