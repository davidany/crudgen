@extends('base')

@section('content')
    <form method = "post" class = "form-horizontal" action = "telescope-entry/add">


        <div class = "container">

            <nav class = "navbar navbar-inverse">
                <div class = "navbar-header">
                    <a class = "navbar-brand" href = "telescope-entry/index">Telescope Entries Page</a>
                </div>
                <ul class = "nav navbar-nav">
                    <li>
                        <a href = "telescope-entry/index">View All Telescope Entries</a>
                    </li>
                    <li>
                        <a href = "telescope-entry/create">Create Telescope Entries</a>
                </ul>
            </nav>

            <h1>Showing {{ $telescopeEntry["id"] }}</h1>

            <div class = "jumbotron text-center">
                <p>
                    <strong>Sequence:</strong> {{ $telescopeEntry->sequence }}<br>
                </p>
                <p>
                    <strong>Uuid:</strong> {{ $telescopeEntry->uuid }}<br>
                </p>
                <p>
                    <strong>Batch Id:</strong> {{ $telescopeEntry->batch_id }}<br>
                </p>
                <p>
                    <strong>Family Hash:</strong> {{ $telescopeEntry->family_hash }}<br>
                </p>
                <p>
                    <strong>Should Display On Index:</strong> {{ $telescopeEntry->should_display_on_index }}<br>
                </p>
                <p>
                    <strong>Type:</strong> {{ $telescopeEntry->type }}<br>
                </p>
                <p>
                    <strong>Content:</strong> {{ $telescopeEntry->content }}<br>
                </p>
                <p>
                    <strong>Created At:</strong> {{ $telescopeEntry->created_at }}<br>
                </p>
            </div>
        </div>
@stop
