@extends('base')

@section('content')
    <form method = "post" class = "form-horizontal" action = "version/add">


        <div class = "container">

            <nav class = "navbar navbar-inverse">
                <div class = "navbar-header">
                    <a class = "navbar-brand" href = "version/index">Version Page</a>
                </div>
                <ul class = "nav navbar-nav">
                    <li>
                        <a href = "version/index">View All Version</a>
                    </li>
                    <li>
                        <a href = "version/create">Create Version</a>
                </ul>
            </nav>

            <h1>Showing {{ $version["id"] }}</h1>

            <div class = "jumbotron text-center">
                <p>
                    <strong>Id:</strong> {{ $version->id }}<br>
                </p>
                <p>
                    <strong>Version Number:</strong> {{ $version->version_number }}<br>
                </p>
                <p>
                    <strong>Version Folder Name:</strong> {{ $version->version_folder_name }}<br>
                </p>
                <p>
                    <strong>Project Id:</strong> {{ $version->project_id }}<br>
                </p>
            </div>
        </div>
@stop
