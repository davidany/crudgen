@extends('base')

@section('content')
    <form method = "post" class = "form-horizontal" action = "attendee-message/add">


        <div class = "container">

            <nav class = "navbar navbar-inverse">
                <div class = "navbar-header">
                    <a class = "navbar-brand" href = "attendee-message/index">Attendee Messages Page</a>
                </div>
                <ul class = "nav navbar-nav">
                    <li>
                        <a href = "attendee-message/index">View All Attendee Messages</a>
                    </li>
                    <li>
                        <a href = "attendee-message/create">Create Attendee Messages</a>
                </ul>
            </nav>

            <h1>Showing {{ $attendeeMessage["id"] }}</h1>

            <div class = "jumbotron text-center">
                <p>
                    <strong>Id:</strong> {{ $attendeeMessage->id }}<br>
                </p>
                <p>
                    <strong>Concert Id:</strong> {{ $attendeeMessage->concert_id }}<br>
                </p>
                <p>
                    <strong>Subject:</strong> {{ $attendeeMessage->subject }}<br>
                </p>
                <p>
                    <strong>Message:</strong> {{ $attendeeMessage->message }}<br>
                </p>
                <p>
                    <strong>Created At:</strong> {{ $attendeeMessage->created_at }}<br>
                </p>
                <p>
                    <strong>Updated At:</strong> {{ $attendeeMessage->updated_at }}<br>
                </p>
            </div>
        </div>
@stop
