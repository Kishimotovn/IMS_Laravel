@extends('masterLayout')

@section('content')
    <div class="row">
        <div class="container">
            <div class="col-sm-12">
                <div class="page-header">
                    <h1>Hello {{$student->firstname}} <small>Student's information</small></h1>
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
                            Name: {{$student->firstname}} {{$student->lastname}}
                        <hr/>
                        Email: {{$student->email}}
                        <hr/>
                        Phone: {{$student->telephone}}
                        <hr/>
                        School: {{$student->school}}
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
                        <tr>
                            <td>Apple</td>
                            <td>AppleSeed@applesupport.com</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="...">
                                    <button type="button" class="btn btn-primary">Info</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Microsoft</td>
                            <td>support@microsoft.com</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="...">
                                    <button type="button" class="btn btn-primary">Info</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Google</td>
                            <td>support@google.com</td>
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
    <div class="row">
        <div class="container">
            <div class="col-xs-12">
                <div class="panel panel-info">
                    <!-- Default panel contents -->
                    <div class="panel-heading">List of companies to be applied:</div>
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
                        <tr>
                            <td>Apple</td>
                            <td>AppleSeed@applesupport.com</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="...">
                                    <button type="button" class="btn btn-primary">Info</button>
                                    <button type="button" class="btn btn-danger">Reg</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Microsoft</td>
                            <td>support@microsoft.com</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="...">
                                    <button type="button" class="btn btn-primary">Info</button>
                                    <button type="button" class="btn btn-danger">Reg</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Google</td>
                            <td>support@google.com</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="...">
                                    <button type="button" class="btn btn-primary">Info</button>
                                    <button type="button" class="btn btn-danger">Reg</button>
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