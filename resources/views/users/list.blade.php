@extends('masterLayout')

@section('content')
        <div class="row">
            <div class="container">
                <div class="col-xs-12">
                    <div class="page-header">
                        <h1>List of Students <small><a href="{{url('users/create')}}" role="button">Create new Student</a></small></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Dob</th>
                        <th>Email</th>
                        <th>Info</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($people as $person)
                        <tr>
                            <td>{{$person->firstname}} {{$person->lastname}}</td>
                            <td>{{$person->dob}}</td>
                            <td>{{$person->email}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="...">
                                    <a href="{{url('/users/'.$person->id)}}" class="btn btn-info" role="button">Info</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@stop

@section('extend-footer')
    <script>
        (function($){
            $(document).ready(function($) {
                $('button#showInfoBtn').click(function(event){
                    alert('show Info Btn Clicked');
                });
            });
        })(jQuery);
    </script>
@stop