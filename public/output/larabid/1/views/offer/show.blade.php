@extends('base')

@section('content')
    <form method = "post" class = "form-horizontal" action = "offer/add">


        <div class = "container">

            <nav class = "navbar navbar-inverse">
                <div class = "navbar-header">
                    <a class = "navbar-brand" href = "offer/index">Offers Page</a>
                </div>
                <ul class = "nav navbar-nav">
                    <li>
                        <a href = "offer/index">View All Offers</a>
                    </li>
                    <li>
                        <a href = "offer/create">Create Offers</a>
                </ul>
            </nav>

            <h1>Showing {{ $offer["id"] }}</h1>

            <div class = "jumbotron text-center">
                <p>
                    <strong>Id:</strong> {{ $offer->id }}<br>
                </p>
                <p>
                    <strong>Offer Pool Id:</strong> {{ $offer->offer_pool_id }}<br>
                </p>
                <p>
                    <strong>Name:</strong> {{ $offer->name }}<br>
                </p>
                <p>
                    <strong>Code:</strong> {{ $offer->code }}<br>
                </p>
                <p>
                    <strong>Url:</strong> {{ $offer->url }}<br>
                </p>
                <p>
                    <strong>Api:</strong> {{ $offer->api }}<br>
                </p>
                <p>
                    <strong>Cost Per Click:</strong> {{ $offer->cost_per_click }}<br>
                </p>
                <p>
                    <strong>Is Active:</strong> {{ $offer->is_active }}<br>
                </p>
                <p>
                    <strong>Priority:</strong> {{ $offer->priority }}<br>
                </p>
                <p>
                    <strong>Created At:</strong> {{ $offer->created_at }}<br>
                </p>
                <p>
                    <strong>Updated At:</strong> {{ $offer->updated_at }}<br>
                </p>
            </div>
        </div>
@stop
