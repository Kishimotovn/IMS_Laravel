@extends('masterLayout')

@section('content')
    <div class="container">
        <br/>

        <div class="row">
            <div class="col-xs-6 col-md-4">
                <a href="#" class="thumbnail">
                    <img src="http://www.placehold.it/300x300" alt="...">
                </a>
            </div>
            <div class="col-xs-6 col-md-8">
                <ul class="list-group">
                    <li class="list-group-item">Name: ABCXYZ</li>
                    <li class="list-group-item">{{$testvar}}</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
        </div>
    </div>
@stop