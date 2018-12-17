@extends('base')

@section('content')
    <form method = "post" class = "form-horizontal" action = "path-variable/add">


        <div class = "container">

            <nav class = "navbar navbar-inverse">
                <div class = "navbar-header">
                    <a class = "navbar-brand" href = "path-variable/index">Path Variables Page</a>
                </div>
                <ul class = "nav navbar-nav">
                    <li>
                        <a href = "path-variable/index">View All Path Variables</a>
                    </li>
                    <li>
                        <a href = "path-variable/create">Create Path Variables</a>
                </ul>
            </nav>

            <h1>Showing {{ $pathVariable["id"] }}</h1>

            <div class = "jumbotron text-center">
                <p>
                    <strong>Id:</strong> {{ $pathVariable->id }}<br>
                </p>
                <p>
                    <strong>Path Id:</strong> {{ $pathVariable->path_id }}<br>
                </p>
                <p>
                    <strong>Input Variable:</strong> {{ $pathVariable->input_variable }}<br>
                </p>
                <p>
                    <strong>Output Variable:</strong> {{ $pathVariable->output_variable }}<br>
                </p>
                <p>
                    <strong>Input Alias:</strong> {{ $pathVariable->input_alias }}<br>
                </p>
                <p>
                    <strong>Created At:</strong> {{ $pathVariable->created_at }}<br>
                </p>
                <p>
                    <strong>Updated At:</strong> {{ $pathVariable->updated_at }}<br>
                </p>
            </div>
        </div>
@stop
