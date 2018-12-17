@extends('base')

@section('content')

    <div class = "container">
        <div class = "row justify-content-center">
            <div class = "col-md-8">
                <div class = "card">
                    <div class = "card-header">Output Variables</div>


                    <!-- will be used to show any messages -->
                    @if (Session::has('message'))
                        <div class = "alert alert-info">{{ Session::get('message') }}</div>
                    @endif

                    <table class = "table table-striped table-bordered">
                        <thead>
                        <tr>
                            <td scope = "col">Id</td>
                            <td scope = "col">Path Id</td>
                            <td scope = "col">Incoming Variable Title</td>
                            <td scope = "col">Outgoing Variable Title</td>
                            <td scope = "col">Created At</td>
                            <td scope = "col">Updated At</td>
                            <td scope = "col">Actions</td>

                        </tr>
                        </thead>
                        <tbody>
                        @if ($outputVariables)
                            @foreach($outputVariables as $outputVariable)
                                <tr>
                                    <td>{{$outputVariable["id"]}}</td>
                                    <td>{{$outputVariable["path_id"]}}</td>
                                    <td>{{$outputVariable["incoming_variable_title"]}}</td>
                                    <td>{{$outputVariable["outgoing_variable_title"]}}</td>
                                    <td>{{$outputVariable["created_at"]}}</td>
                                    <td>{{$outputVariable["updated_at"]}}</td>
                                    <td>
                                        <div class = "form-group">
                                            <a class = "btn btn-sm btn-info" href = "/output-variable/{{$outputVariable['id']}}">Edit</a>

                                        </div>
                                        <a class = "btn btn-sm btn-danger" href = "#">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    </div>
@stop
