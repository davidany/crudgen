@extends('base')

@section('content')

    <div class = "container">
        <div class = "row justify-content-center">
            <div class = "col-md-8">
                <div class = "card">
                    <div class = "card-header">Visitors</div>


                    <!-- will be used to show any messages -->
                    @if (Session::has('message'))
                        <div class = "alert alert-info">{{ Session::get('message') }}</div>
                    @endif

                    <table class = "table table-striped table-bordered">
                        <thead>
                        <tr>
                            <td scope = "col">Id</td>
                            <td scope = "col">Affiliate Cake Id</td>
                            <td scope = "col">Email</td>
                            <td scope = "col">Ip Address</td>
                            <td scope = "col">Incoming Url</td>
                            <td scope = "col">Outgoing Url</td>
                            <td scope = "col">Created At</td>
                            <td scope = "col">Updated At</td>
                            <td scope = "col">Actions</td>

                        </tr>
                        </thead>
                        <tbody>
                        @if ($visitors)
                            @foreach($visitors as $visitor)
                                <tr>
                                    <td>{{$visitor["id"]}}</td>
                                    <td>{{$visitor["affiliate_cake_id"]}}</td>
                                    <td>{{$visitor["email"]}}</td>
                                    <td>{{$visitor["ip_address"]}}</td>
                                    <td>{{$visitor["incoming_url"]}}</td>
                                    <td>{{$visitor["outgoing_url"]}}</td>
                                    <td>{{$visitor["created_at"]}}</td>
                                    <td>{{$visitor["updated_at"]}}</td>
                                    <td>
                                        <div class = "form-group">
                                            <a class = "btn btn-sm btn-info" href = "/visitor/{{$visitor['id']}}">Edit</a>

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
