@extends('masterLayout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-header">
                    <h1>Kishi <small>Student's information</small></h1>
                </div>
            </div>
        </div>
        <div class="row">
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
                            Name: {{$user->firstname}} {{$user->lastname}}
                        <hr/>
                        Email: {{$user->email}}
                        <hr/>
                        DoB: {{$user->dob}}
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <div class="row container">
            <div class="col-xs-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        @if ($user->isAdmin() == true)
                            <h3 class="panel-title"><a href={{url('posts/')}}>Posts List</a></h3>
                        @else
                            <h3 class="panel-title">Posts List</h3>
                        @endif
                    </div>
                    <br/>
                    @foreach($posts as $post)
                    <div class="row">
                        <div class="container">
                            <div class="col-xs-2">
                                <a href="#" class="thumbnail">
                                    <img src="http://placehold.it/300x300" alt="Placeholder">
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <div class="caption">
                                    <h3>{{$post->title}}</h3>
                                    <p>{{$post->body}}</p>
                                    <p><a href={{url('posts/'.$post->id)}} class="btn" role="button">More</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr/>
                    @endforeach
                </div>
            </div>
            <div class="col-xs-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        @if ($user->isAdmin() == true)
                            <h3 class="panel-title"><a href={{url('companies/')}}>Company List</a></h3>
                        @else
                            <h3 class="panel-title">Company List</h3>
                        @endif
                    </div>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Company Name</th>
                            <th>Website</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($companies as $company)
                        <tr>
                            <td>{{$company->name}}</td>
                            <td>{{$company->website}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="...">
                                    <a href={{url('companies/'.$company->id)}} role="button" class="btn btn-primary">Info</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @if (Auth::user()->isAdmin())
            <div class="row">
                <div class="container col-xs-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title"><a href={{url('users/list')}}>Students List</a></h3>
                        </div>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Student's Name</th>
                                <th>Email</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->firstname}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="...">
                                            <a href={{url('users/'.$user->id)}} role="button" class="btn btn-primary">Info</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        @endif
    </div>
@stop