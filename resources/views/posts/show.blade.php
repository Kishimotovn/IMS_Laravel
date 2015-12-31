@extends('masterLayout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-header">
                    <h1>{{$post->title}}<small> By {{$post->user()->get()->first()->firstname}}</small></h1>
                </div>
            </div>
            <div class="col-sm-12">
                <p>
                    {{$post->body}}
                </p>
            </div>
        </div>
        <hr/>
    </div>
@stop