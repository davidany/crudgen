@extends('base')

@section('content')
    <form method = "post" class = "form-horizontal" action = "telescope-entries-tag/add">


        <div class = "container">

            <nav class = "navbar navbar-inverse">
                <div class = "navbar-header">
                    <a class = "navbar-brand" href = "telescope-entries-tag/index">Telescope Entries Tags Page</a>
                </div>
                <ul class = "nav navbar-nav">
                    <li>
                        <a href = "telescope-entries-tag/index">View All Telescope Entries Tags</a>
                    </li>
                    <li>
                        <a href = "telescope-entries-tag/create">Create Telescope Entries Tags</a>
                </ul>
            </nav>

            <h1>Showing {{ $telescopeEntriesTag["id"] }}</h1>

            <div class = "jumbotron text-center">
                <p>
                    <strong>Entry Uuid:</strong> {{ $telescopeEntriesTag->entry_uuid }}<br>
                </p>
                <p>
                    <strong>Tag:</strong> {{ $telescopeEntriesTag->tag }}<br>
                </p>
            </div>
        </div>
@stop
