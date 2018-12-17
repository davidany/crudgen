@extends('base')

@section('content')
    <form method = "post" class = "form-horizontal" action = "ticket/add">


        <div class = "container">

            <nav class = "navbar navbar-inverse">
                <div class = "navbar-header">
                    <a class = "navbar-brand" href = "ticket/index">Tickets Page</a>
                </div>
                <ul class = "nav navbar-nav">
                    <li>
                        <a href = "ticket/index">View All Tickets</a>
                    </li>
                    <li>
                        <a href = "ticket/create">Create Tickets</a>
                </ul>
            </nav>

            <h1>Showing {{ $ticket["id"] }}</h1>

            <div class = "jumbotron text-center">
                <p>
                    <strong>Id:</strong> {{ $ticket->id }}<br>
                </p>
                <p>
                    <strong>Concert Id:</strong> {{ $ticket->concert_id }}<br>
                </p>
                <p>
                    <strong>Order Id:</strong> {{ $ticket->order_id }}<br>
                </p>
                <p>
                    <strong>Reserved At:</strong> {{ $ticket->reserved_at }}<br>
                </p>
                <p>
                    <strong>Code:</strong> {{ $ticket->code }}<br>
                </p>
                <p>
                    <strong>Created At:</strong> {{ $ticket->created_at }}<br>
                </p>
                <p>
                    <strong>Updated At:</strong> {{ $ticket->updated_at }}<br>
                </p>
            </div>
        </div>
@stop
