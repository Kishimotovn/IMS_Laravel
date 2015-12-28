@extends('masterLayout')

@section('content')
    <div class="row">
        <div class="container">
            <div class="col-sm-12">
                <div class="page-header">
                    <h1>{{$company->name}} <small>Company's information</small></h1>
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
                        <h3 class="panel-title">Student Information</h3>
                    </div>
                    <div class="panel-body">
                        <p>
                            Name: {{$company->name}}
                        <hr/>
                        Email: {{$company->website}}
                        <hr/>
                        Phone: (+86) 969 696 6969
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
                    <div class="panel-heading">List of students applied:</div>
                    <!-- Table -->
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th class="col-sm-3">Student Name</th>
                            <th class="col-sm-7">School</th>
                            <th class="col-sm-2">Register</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Kishimotovn</td>
                            <td>kishimotovn@gmail.com</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="...">
                                    <button type="button" class="btn btn-primary">Info</button>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop