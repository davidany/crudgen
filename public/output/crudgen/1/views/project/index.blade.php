@extends('base')

@section('content')

    <div class = "container">
        <div class = "row justify-content-center">
            <div class = "col-md-8">
                <div class = "card">
                    <div class = "card-header">Project</div>


                    <!-- will be used to show any messages -->
                    @if (Session::has('message'))
                        <div class = "alert alert-info">{{ Session::get('message') }}</div>
                    @endif

                    <table class = "table table-striped table-bordered">
                        <thead>
                        <tr>
                            <td scope = "col">Id</td>
                            <td scope = "col">Name</td>
                            <td scope = "col">Directory</td>
                            <td scope = "col">Actions</td>

                        </tr>
                        </thead>
                        <tbody>
                        @if ($project)
                            @foreach($project as $project)
                                <tr>
                                    <td>{{$project["id"]}}</td>
                                    <td>{{$project["name"]}}</td>
                                    <td>{{$project["directory"]}}</td>
                                    <td>
                                        <div class = "form-group">
                                            <a class = "btn btn-sm btn-info" href = "/project/{{$project['id']}}">Edit</a>

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
