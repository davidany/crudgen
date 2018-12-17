@extends('base')

@section('content')
    <form method = "post" class = "form-horizontal" action = "order/add">


        <div class = "container">

            <nav class = "navbar navbar-inverse">
                <div class = "navbar-header">
                    <a class = "navbar-brand" href = "order/index">Orders Page</a>
                </div>
                <ul class = "nav navbar-nav">
                    <li>
                        <a href = "order/index">View All Orders</a>
                    </li>
                    <li>
                        <a href = "order/create">Create Orders</a>
                </ul>
            </nav>

            <h1>Showing {{ $order["id"] }}</h1>

            <div class = "jumbotron text-center">
                <p>
                    <strong>Id:</strong> {{ $order->id }}<br>
                </p>
                <p>
                    <strong>Confirmation Number:</strong> {{ $order->confirmation_number }}<br>
                </p>
                <p>
                    <strong>Amount:</strong> {{ $order->amount }}<br>
                </p>
                <p>
                    <strong>Email:</strong> {{ $order->email }}<br>
                </p>
                <p>
                    <strong>Card Last Four:</strong> {{ $order->card_last_four }}<br>
                </p>
                <p>
                    <strong>Created At:</strong> {{ $order->created_at }}<br>
                </p>
                <p>
                    <strong>Updated At:</strong> {{ $order->updated_at }}<br>
                </p>
            </div>
        </div>
@stop
