@extends('base')

@section('content')
    <form method = "post" class = "form-horizontal" action = "telescope-monitoring/add">


        <div class = "container">

            <nav class = "navbar navbar-inverse">
                <div class = "navbar-header">
                    <a class = "navbar-brand" href = "telescope-monitoring/index">Telescope Monitoring Page</a>
                </div>
                <ul class = "nav navbar-nav">
                    <li>
                        <a href = "telescope-monitoring/index">View All Telescope Monitoring</a>
                    </li>
                    <li>
                        <a href = "telescope-monitoring/create">Create Telescope Monitoring</a>
                </ul>
            </nav>

            <h1>Showing {{ $telescopeMonitoring["id"] }}</h1>

            <div class = "jumbotron text-center">
                <p>
                    <strong>Tag:</strong> {{ $telescopeMonitoring->tag }}<br>
                </p>
            </div>
        </div>
@stop
