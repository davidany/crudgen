@extends('base')

@section('content')
    <form method = "post" class = "form-horizontal" action = "api-offer/add">


        <div class = "container">

            <nav class = "navbar navbar-inverse">
                <div class = "navbar-header">
                    <a class = "navbar-brand" href = "api-offer/index">Api Offers Page</a>
                </div>
                <ul class = "nav navbar-nav">
                    <li>
                        <a href = "api-offer/index">View All Api Offers</a>
                    </li>
                    <li>
                        <a href = "api-offer/create">Create Api Offers</a>
                </ul>
            </nav>

            <h1>Showing {{ $apiOffer["id"] }}</h1>

            <div class = "jumbotron text-center">
                <p>
                    <strong>Id:</strong> {{ $apiOffer->id }}<br>
                </p>
                <p>
                    <strong>Api Code:</strong> {{ $apiOffer->api_code }}<br>
                </p>
                <p>
                    <strong>Api Name:</strong> {{ $apiOffer->api_name }}<br>
                </p>
                <p>
                    <strong>Api Url:</strong> {{ $apiOffer->api_url }}<br>
                </p>
                <p>
                    <strong>Api User Name:</strong> {{ $apiOffer->api_user_name }}<br>
                </p>
                <p>
                    <strong>Api Password:</strong> {{ $apiOffer->api_password }}<br>
                </p>
                <p>
                    <strong>Api Key:</strong> {{ $apiOffer->api_key }}<br>
                </p>
                <p>
                    <strong>Api Hash Key:</strong> {{ $apiOffer->api_hash_key }}<br>
                </p>
                <p>
                    <strong>Created At:</strong> {{ $apiOffer->created_at }}<br>
                </p>
                <p>
                    <strong>Updated At:</strong> {{ $apiOffer->updated_at }}<br>
                </p>
            </div>
        </div>
@stop
