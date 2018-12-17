@extends('base')

@section('content')
    <form method = "post" class = "form-horizontal" action = "concert/add">


        <div class = "container">

            <nav class = "navbar navbar-inverse">
                <div class = "navbar-header">
                    <a class = "navbar-brand" href = "concert/index">Concerts Page</a>
                </div>
                <ul class = "nav navbar-nav">
                    <li>
                        <a href = "concert/index">View All Concerts</a>
                    </li>
                    <li>
                        <a href = "concert/create">Create Concerts</a>
                </ul>
            </nav>

            <h1>Showing {{ $concert["id"] }}</h1>

            <div class = "jumbotron text-center">
                <p>
                    <strong>Id:</strong> {{ $concert->id }}<br>
                </p>
                <p>
                    <strong>User Id:</strong> {{ $concert->user_id }}<br>
                </p>
                <p>
                    <strong>Title:</strong> {{ $concert->title }}<br>
                </p>
                <p>
                    <strong>Subtitle:</strong> {{ $concert->subtitle }}<br>
                </p>
                <p>
                    <strong>Additional Information:</strong> {{ $concert->additional_information }}<br>
                </p>
                <p>
                    <strong>Date:</strong> {{ $concert->date }}<br>
                </p>
                <p>
                    <strong>Venue:</strong> {{ $concert->venue }}<br>
                </p>
                <p>
                    <strong>Venue Address:</strong> {{ $concert->venue_address }}<br>
                </p>
                <p>
                    <strong>City:</strong> {{ $concert->city }}<br>
                </p>
                <p>
                    <strong>State:</strong> {{ $concert->state }}<br>
                </p>
                <p>
                    <strong>Zip:</strong> {{ $concert->zip }}<br>
                </p>
                <p>
                    <strong>Ticket Price:</strong> {{ $concert->ticket_price }}<br>
                </p>
                <p>
                    <strong>Ticket Quantity:</strong> {{ $concert->ticket_quantity }}<br>
                </p>
                <p>
                    <strong>Poster Image Path:</strong> {{ $concert->poster_image_path }}<br>
                </p>
                <p>
                    <strong>Published At:</strong> {{ $concert->published_at }}<br>
                </p>
                <p>
                    <strong>Created At:</strong> {{ $concert->created_at }}<br>
                </p>
                <p>
                    <strong>Updated At:</strong> {{ $concert->updated_at }}<br>
                </p>
            </div>
        </div>
@stop
