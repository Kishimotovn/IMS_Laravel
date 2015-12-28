@extends('masterLayout')

@section('content')

        <div class="row">
            <div class="container">
                <div class="col-sm-12">
                    <div class="page-header">
                        <h1>Students <small>List of students</small></h1>
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
                        <th>School</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Info</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td>{{$student->firstname}} {{$student->lastname}}</td>
                            <td>{{$student->school}}</td>
                            <td>{{$student->telephone}}</td>
                            <td>{{$student->email}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="...">
                                    <button type="button" class="btn btn-primary">Info</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@stop