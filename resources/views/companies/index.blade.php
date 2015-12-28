@extends('masterLayout')

@section('content')
    <div class="row">
        <div class="row">
            <div class="container">
                <div class="col-sm-12">
                    <div class="page-header">
                        <h1>Companies <small>List of companies</small></h1>
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
                                <button type="button" class="btn btn-primary">Info</button>
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