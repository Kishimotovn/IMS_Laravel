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
                        Website: {{$company->website}}
                        <hr/>
                        Email: {{$company->email}}
                        <hr/>
                        Brief Intro: {{$company->briefIntro}}
                        <hr/>
                        @if (Auth::user()->companies() != null && Auth::user()->isAdmin() == true)

                        @elseif(Auth::user()->companies() != null && Auth::user()->companies()->get()->find($company->id) == null)
                            <a href={{url('users/reg/'.$company->id)}} class="btn btn-primary">Register</a>
                        @elseif (Auth::user()->companies()->get()->count() >= 3)
                            You have registered 3 companies already!
                        @elseif($company->users()->get()->count() >= $company->numberOfStudentNeeded)
                            This company has recruit enough Student!
                        @else
                            <a href={{url('users/unreg/'.$company->id)}} class="btn btn-primary">Unregister</a>
                        @endif
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
                    @if($company->users() != null)
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th class="col-sm-3">Student Name</th>
                            <th class="col-sm-7">Email</th>
                            <th class="col-sm-2">Register</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($company->users()->get() as $user)
                        <tr>
                            <td>{{$user->firstname}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="...">
                                    <a href={{url('users/'.$user->id)}} type="button" class="btn btn-primary">Info</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @else
                    <p>None</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@stop