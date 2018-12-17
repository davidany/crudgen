@extends('base')

@section('content')
    <form method = "post" class = "form-horizontal" action = "variable/add">


        <div class = "container">

            <nav class = "navbar navbar-inverse">
                <div class = "navbar-header">
                    <a class = "navbar-brand" href = "variable/index">Variables Page</a>
                </div>
                <ul class = "nav navbar-nav">
                    <li>
                        <a href = "variable/index">View All Variables</a>
                    </li>
                    <li>
                        <a href = "variable/create">Create Variables</a>
                </ul>
            </nav>

            <h1>Showing {{ $variable["id"] }}</h1>

            <div class = "jumbotron text-center">
                <p>
                    <strong>Id:</strong> {{ $variable->id }}<br>
                </p>
            </div>
        </div>
@stop
