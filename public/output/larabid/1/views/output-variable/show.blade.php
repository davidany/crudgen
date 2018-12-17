@extends('base')

@section('content')
    <form method = "post" class = "form-horizontal" action = "output-variable/add">


        <div class = "container">

            <nav class = "navbar navbar-inverse">
                <div class = "navbar-header">
                    <a class = "navbar-brand" href = "output-variable/index">Output Variables Page</a>
                </div>
                <ul class = "nav navbar-nav">
                    <li>
                        <a href = "output-variable/index">View All Output Variables</a>
                    </li>
                    <li>
                        <a href = "output-variable/create">Create Output Variables</a>
                </ul>
            </nav>

            <h1>Showing {{ $outputVariable["id"] }}</h1>

            <div class = "jumbotron text-center">
                <p>
                    <strong>Id:</strong> {{ $outputVariable->id }}<br>
                </p>
                <p>
                    <strong>Path Id:</strong> {{ $outputVariable->path_id }}<br>
                </p>
                <p>
                    <strong>Incoming Variable Title:</strong> {{ $outputVariable->incoming_variable_title }}<br>
                </p>
                <p>
                    <strong>Outgoing Variable Title:</strong> {{ $outputVariable->outgoing_variable_title }}<br>
                </p>
                <p>
                    <strong>Created At:</strong> {{ $outputVariable->created_at }}<br>
                </p>
                <p>
                    <strong>Updated At:</strong> {{ $outputVariable->updated_at }}<br>
                </p>
            </div>
        </div>
@stop
