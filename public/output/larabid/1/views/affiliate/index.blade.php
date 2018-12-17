@extends('base')

@section('content')

    <div class = "container">
        <div class = "row justify-content-center">
            <div class = "col-md-8">
                <div class = "card">
                    <div class = "card-header">Affiliates</div>


                    <!-- will be used to show any messages -->
                    @if (Session::has('message'))
                        <div class = "alert alert-info">{{ Session::get('message') }}</div>
                    @endif

                    <table class = "table table-striped table-bordered">
                        <thead>
                        <tr>
                            <td scope = "col">Id</td>
                            <td scope = "col">Affiliate Cake Id</td>
                            <td scope = "col">Affiliate Name</td>
                            <td scope = "col">First Name</td>
                            <td scope = "col">Last Name</td>
                            <td scope = "col">Email</td>
                            <td scope = "col">Cell</td>
                            <td scope = "col">Username</td>
                            <td scope = "col">Is Active</td>
                            <td scope = "col">Affiliate Code</td>
                            <td scope = "col">Fail Url</td>
                            <td scope = "col">Created At</td>
                            <td scope = "col">Updated At</td>
                            <td scope = "col">Actions</td>

                        </tr>
                        </thead>
                        <tbody>
                        @if ($affiliates)
                            @foreach($affiliates as $affiliate)
                                <tr>
                                    <td>{{$affiliate["id"]}}</td>
                                    <td>{{$affiliate["affiliate_cake_id"]}}</td>
                                    <td>{{$affiliate["affiliate_name"]}}</td>
                                    <td>{{$affiliate["first_name"]}}</td>
                                    <td>{{$affiliate["last_name"]}}</td>
                                    <td>{{$affiliate["email"]}}</td>
                                    <td>{{$affiliate["cell"]}}</td>
                                    <td>{{$affiliate["username"]}}</td>
                                    <td>{{$affiliate["is_active"]}}</td>
                                    <td>{{$affiliate["affiliate_code"]}}</td>
                                    <td>{{$affiliate["fail_url"]}}</td>
                                    <td>{{$affiliate["created_at"]}}</td>
                                    <td>{{$affiliate["updated_at"]}}</td>
                                    <td>
                                        <div class = "form-group">
                                            <a class = "btn btn-sm btn-info" href = "/affiliate/{{$affiliate['id']}}">Edit</a>

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
