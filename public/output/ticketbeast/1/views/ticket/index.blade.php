@extends('base')

@section('content')

    <div class = "container">
        <div class = "row justify-content-center">
            <div class = "col-md-8">
                <div class = "card">
                    <div class = "card-header">Tickets</div>


                    <!-- will be used to show any messages -->
                    @if (Session::has('message'))
                        <div class = "alert alert-info">{{ Session::get('message') }}</div>
                    @endif

                    <table class = "table table-striped table-bordered">
                        <thead>
                        <tr>
                            <td scope = "col">Id</td>
                            <td scope = "col">Concert Id</td>
                            <td scope = "col">Order Id</td>
                            <td scope = "col">Reserved At</td>
                            <td scope = "col">Code</td>
                            <td scope = "col">Created At</td>
                            <td scope = "col">Updated At</td>
                            <td scope = "col">Actions</td>

                        </tr>
                        </thead>
                        <tbody>
                        @if ($tickets)
                            @foreach($tickets as $ticket)
                                <tr>
                                    <td>{{$ticket["id"]}}</td>
                                    <td>{{$ticket["concert_id"]}}</td>
                                    <td>{{$ticket["order_id"]}}</td>
                                    <td>{{$ticket["reserved_at"]}}</td>
                                    <td>{{$ticket["code"]}}</td>
                                    <td>{{$ticket["created_at"]}}</td>
                                    <td>{{$ticket["updated_at"]}}</td>
                                    <td>
                                        <div class = "form-group">
                                            <a class = "btn btn-sm btn-info" href = "/ticket/{{$ticket['id']}}">Edit</a>

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
