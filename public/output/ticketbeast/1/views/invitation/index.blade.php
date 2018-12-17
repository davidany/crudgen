@extends('base')

@section('content')

    <div class = "container">
        <div class = "row justify-content-center">
            <div class = "col-md-8">
                <div class = "card">
                    <div class = "card-header">Invitations</div>


                    <!-- will be used to show any messages -->
                    @if (Session::has('message'))
                        <div class = "alert alert-info">{{ Session::get('message') }}</div>
                    @endif

                    <table class = "table table-striped table-bordered">
                        <thead>
                        <tr>
                            <td scope = "col">Id</td>
                            <td scope = "col">User Id</td>
                            <td scope = "col">Email</td>
                            <td scope = "col">Code</td>
                            <td scope = "col">Created At</td>
                            <td scope = "col">Updated At</td>
                            <td scope = "col">Actions</td>

                        </tr>
                        </thead>
                        <tbody>
                        @if ($invitations)
                            @foreach($invitations as $invitation)
                                <tr>
                                    <td>{{$invitation["id"]}}</td>
                                    <td>{{$invitation["user_id"]}}</td>
                                    <td>{{$invitation["email"]}}</td>
                                    <td>{{$invitation["code"]}}</td>
                                    <td>{{$invitation["created_at"]}}</td>
                                    <td>{{$invitation["updated_at"]}}</td>
                                    <td>
                                        <div class = "form-group">
                                            <a class = "btn btn-sm btn-info" href = "/invitation/{{$invitation['id']}}">Edit</a>

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
