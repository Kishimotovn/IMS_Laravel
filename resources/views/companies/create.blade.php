@extends('masterLayout')

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
    {!! Form::open(['url' => 'companies']) !!}
    @include('companies.form', ['submitBtnLabel' => 'Add Company'])
    {!! Form::close() !!}

    @include('errors.list')
@stop