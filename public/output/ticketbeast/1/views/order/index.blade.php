@extends('base')

@section('content')

    <div class = "container">
        <div class = "row justify-content-center">
            <div class = "col-md-8">
                <div class = "card">
                    <div class = "card-header">Orders</div>


                    <!-- will be used to show any messages -->
                    @if (Session::has('message'))
                        <div class = "alert alert-info">{{ Session::get('message') }}</div>
                    @endif

                    <table class = "table table-striped table-bordered">
                        <thead>
                        <tr>
                            <td scope = "col">Id</td>
                            <td scope = "col">Confirmation Number</td>
                            <td scope = "col">Amount</td>
                            <td scope = "col">Email</td>
                            <td scope = "col">Card Last Four</td>
                            <td scope = "col">Created At</td>
                            <td scope = "col">Updated At</td>
                            <td scope = "col">Actions</td>

                        </tr>
                        </thead>
                        <tbody>
                        @if ($orders)
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{$order["id"]}}</td>
                                    <td>{{$order["confirmation_number"]}}</td>
                                    <td>{{$order["amount"]}}</td>
                                    <td>{{$order["email"]}}</td>
                                    <td>{{$order["card_last_four"]}}</td>
                                    <td>{{$order["created_at"]}}</td>
                                    <td>{{$order["updated_at"]}}</td>
                                    <td>
                                        <div class = "form-group">
                                            <a class = "btn btn-sm btn-info" href = "/order/{{$order['id']}}">Edit</a>

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
