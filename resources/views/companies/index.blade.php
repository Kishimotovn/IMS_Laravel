@extends('masterLayout')

@section('content')
    <div class="row">
        <div class="row">
            <div class="container">
                <div class="col-sm-12">
                    <div class="page-header">
                        <h1>List of Companies <small><a href="{{url('companies/create')}}" role="button">Create new Company</a></small></h1>
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
                        <th>Website</th>
                        <th>Info</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($companies as $company)
                    <tr>
                        <td>{{$company->name}}</td>
                        <td>{{$company->website}}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="...">
                                <a href="{{url('/companies/'.$company->id)}}" class="btn btn-info" role="button">Info</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop