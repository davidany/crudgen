@extends('base')

@section('content')

    <div class = "container">
        <div class = "row justify-content-center">
            <div class = "col-md-8">
                <div class = "card">
                    <div class = "card-header">Users</div>


                    <!-- will be used to show any messages -->
                    @if (Session::has('message'))
                        <div class = "alert alert-info">{{ Session::get('message') }}</div>
                    @endif

                    <table class = "table table-striped table-bordered">
                        <thead>
                        <tr>
                            <td scope = "col">Id</td>
                            <td scope = "col">Email</td>
                            <td scope = "col">Password</td>
                            <td scope = "col">Stripe Account Id</td>
                            <td scope = "col">Stripe Access Token</td>
                            <td scope = "col">Remember Token</td>
                            <td scope = "col">Created At</td>
                            <td scope = "col">Updated At</td>
                            <td scope = "col">Actions</td>

                        </tr>
                        </thead>
                        <tbody>
                        @if ($users)
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user["id"]}}</td>
                                    <td>{{$user["email"]}}</td>
                                    <td>{{$user["password"]}}</td>
                                    <td>{{$user["stripe_account_id"]}}</td>
                                    <td>{{$user["stripe_access_token"]}}</td>
                                    <td>{{$user["remember_token"]}}</td>
                                    <td>{{$user["created_at"]}}</td>
                                    <td>{{$user["updated_at"]}}</td>
                                    <td>
                                        <div class = "form-group">
                                            <a class = "btn btn-sm btn-info" href = "/user/{{$user['id']}}">Edit</a>

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
