@extends('base')

@section('content')
    <form method = "post" class = "form-horizontal" action = "path/add">


        <div class = "container">

            <nav class = "navbar navbar-inverse">
                <div class = "navbar-header">
                    <a class = "navbar-brand" href = "path/index">Paths Page</a>
                </div>
                <ul class = "nav navbar-nav">
                    <li>
                        <a href = "path/index">View All Paths</a>
                    </li>
                    <li>
                        <a href = "path/create">Create Paths</a>
                </ul>
            </nav>

            <h1>Showing {{ $path["id"] }}</h1>

            <div class = "jumbotron text-center">
                <p>
                    <strong>Id:</strong> {{ $path->id }}<br>
                </p>
                <p>
                    <strong>Affiliate Id:</strong> {{ $path->affiliate_id }}<br>
                </p>
                <p>
                    <strong>Is Active:</strong> {{ $path->is_active }}<br>
                </p>
                <p>
                    <strong>Name:</strong> {{ $path->name }}<br>
                </p>
                <p>
                    <strong>Has Hash Id:</strong> {{ $path->has_hash_id }}<br>
                </p>
                <p>
                    <strong>Has Variable Alias:</strong> {{ $path->has_variable_alias }}<br>
                </p>
                <p>
                    <strong>Fail Url:</strong> {{ $path->fail_url }}<br>
                </p>
                <p>
                    <strong>Type:</strong> {{ $path->type }}<br>
                </p>
                <p>
                    <strong>Created At:</strong> {{ $path->created_at }}<br>
                </p>
                <p>
                    <strong>Updated At:</strong> {{ $path->updated_at }}<br>
                </p>
            </div>
        </div>
@stop
