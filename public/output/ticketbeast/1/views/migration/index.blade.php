@extends('base')

@section('content')

    <div class = "container">
        <div class = "row justify-content-center">
            <div class = "col-md-8">
                <div class = "card">
                    <div class = "card-header">Migrations</div>


                    <!-- will be used to show any messages -->
                    @if (Session::has('message'))
                        <div class = "alert alert-info">{{ Session::get('message') }}</div>
                    @endif

                    <table class = "table table-striped table-bordered">
                        <thead>
                        <tr>
                            <td scope = "col">Id</td>
                            <td scope = "col">Migration</td>
                            <td scope = "col">Batch</td>
                            <td scope = "col">Actions</td>

                        </tr>
                        </thead>
                        <tbody>
                        @if ($migrations)
                            @foreach($migrations as $migration)
                                <tr>
                                    <td>{{$migration["id"]}}</td>
                                    <td>{{$migration["migration"]}}</td>
                                    <td>{{$migration["batch"]}}</td>
                                    <td>
                                        <div class = "form-group">
                                            <a class = "btn btn-sm btn-info" href = "/migration/{{$migration['id']}}">Edit</a>

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
