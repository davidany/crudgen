@extends('base')

@section('content')
    <form method = "post" class = "form-horizontal" action = "visitor-variable/add">


        <div class = "container">

            <nav class = "navbar navbar-inverse">
                <div class = "navbar-header">
                    <a class = "navbar-brand" href = "visitor-variable/index">Visitor Variables Page</a>
                </div>
                <ul class = "nav navbar-nav">
                    <li>
                        <a href = "visitor-variable/index">View All Visitor Variables</a>
                    </li>
                    <li>
                        <a href = "visitor-variable/create">Create Visitor Variables</a>
                </ul>
            </nav>

            <h1>Showing {{ $visitorVariable["id"] }}</h1>

            <div class = "jumbotron text-center">
                <p>
                    <strong>Id:</strong> {{ $visitorVariable->id }}<br>
                </p>
                <p>
                    <strong>Visitor Id:</strong> {{ $visitorVariable->visitor_id }}<br>
                </p>
                <p>
                    <strong>Name:</strong> {{ $visitorVariable->name }}<br>
                </p>
                <p>
                    <strong>Value:</strong> {{ $visitorVariable->value }}<br>
                </p>
                <p>
                    <strong>Created At:</strong> {{ $visitorVariable->created_at }}<br>
                </p>
                <p>
                    <strong>Updated At:</strong> {{ $visitorVariable->updated_at }}<br>
                </p>
            </div>
        </div>
@stop
