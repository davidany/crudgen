@extends('base')

@section('content')
    <form method = "post" class = "form-horizontal" action = "invitation/add">


        <div class = "container">

            <nav class = "navbar navbar-inverse">
                <div class = "navbar-header">
                    <a class = "navbar-brand" href = "invitation/index">Invitations Page</a>
                </div>
                <ul class = "nav navbar-nav">
                    <li>
                        <a href = "invitation/index">View All Invitations</a>
                    </li>
                    <li>
                        <a href = "invitation/create">Create Invitations</a>
                </ul>
            </nav>

            <h1>Showing {{ $invitation["id"] }}</h1>

            <div class = "jumbotron text-center">
                <p>
                    <strong>Id:</strong> {{ $invitation->id }}<br>
                </p>
                <p>
                    <strong>User Id:</strong> {{ $invitation->user_id }}<br>
                </p>
                <p>
                    <strong>Email:</strong> {{ $invitation->email }}<br>
                </p>
                <p>
                    <strong>Code:</strong> {{ $invitation->code }}<br>
                </p>
                <p>
                    <strong>Created At:</strong> {{ $invitation->created_at }}<br>
                </p>
                <p>
                    <strong>Updated At:</strong> {{ $invitation->updated_at }}<br>
                </p>
            </div>
        </div>
@stop
