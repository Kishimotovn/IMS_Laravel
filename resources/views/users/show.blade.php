@extends('masterLayout')

@section('content')
    <div class="row">
        <div class="container">
            <div class="col-sm-12">
                <div class="page-header">
                    <h1>Hello {{$person->firstname}} <small>Student's information</small></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="http://placehold.it/300x300" alt="Placeholder">
                </a>
            </div>
            <div class="col-xs-6 col-md-9">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        @if(Auth::user()->isAdmin() == true)
                            <h3 class="panel-title"><a href={{url('users/'.$person->id.'/edit')}}>Student Information</a></h3>
                        @else
                            <h3 class="panel-title">Student Information</h3>
                        @endif

                    </div>
                    <div class="panel-body">
                        <p>
                            Name: {{$person->firstname}} {{$person->lastname}}
                        <hr/>
                        Email: {{$person->email}}
                        <hr/>
                        dob: {{$person->dob}}
                        <hr/>
                        Descriptions: {{$person->descriptions}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="col-xs-12">
                <div class="panel panel-info">
                    <!-- Default panel contents -->
                    <div class="panel-heading">List of companies applied:</div>
                    <!-- Table -->
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th class="col-sm-3">Company Name</th>
                            <th class="col-sm-7">Website</th>
                            <th class="col-sm-2">Register</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($applied_companies as $company)
                        <tr>
                            <td>{{$company->name}}</td>
                            <td>{{$company->website}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="...">
                                    <a href={{url('companies/'.$company->id)}} type="button" class="btn btn-primary">Info</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop