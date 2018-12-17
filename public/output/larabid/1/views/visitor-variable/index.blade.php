@extends('base')

@section('content')

    <div class = "container">
        <div class = "row justify-content-center">
            <div class = "col-md-8">
                <div class = "card">
                    <div class = "card-header">Visitor Variables</div>


                    <!-- will be used to show any messages -->
                    @if (Session::has('message'))
                        <div class = "alert alert-info">{{ Session::get('message') }}</div>
                    @endif

                    <table class = "table table-striped table-bordered">
                        <thead>
                        <tr>
                            <td scope = "col">Id</td>
                            <td scope = "col">Visitor Id</td>
                            <td scope = "col">Name</td>
                            <td scope = "col">Value</td>
                            <td scope = "col">Created At</td>
                            <td scope = "col">Updated At</td>
                            <td scope = "col">Actions</td>

                        </tr>
                        </thead>
                        <tbody>
                        @if ($visitorVariables)
                            @foreach($visitorVariables as $visitorVariable)
                                <tr>
                                    <td>{{$visitorVariable["id"]}}</td>
                                    <td>{{$visitorVariable["visitor_id"]}}</td>
                                    <td>{{$visitorVariable["name"]}}</td>
                                    <td>{{$visitorVariable["value"]}}</td>
                                    <td>{{$visitorVariable["created_at"]}}</td>
                                    <td>{{$visitorVariable["updated_at"]}}</td>
                                    <td>
                                        <div class = "form-group">
                                            <a class = "btn btn-sm btn-info" href = "/visitor-variable/{{$visitorVariable['id']}}">Edit</a>

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
