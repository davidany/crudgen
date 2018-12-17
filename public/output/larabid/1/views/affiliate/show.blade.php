@extends('base')

@section('content')
    <form method = "post" class = "form-horizontal" action = "affiliate/add">


        <div class = "container">

            <nav class = "navbar navbar-inverse">
                <div class = "navbar-header">
                    <a class = "navbar-brand" href = "affiliate/index">Affiliates Page</a>
                </div>
                <ul class = "nav navbar-nav">
                    <li>
                        <a href = "affiliate/index">View All Affiliates</a>
                    </li>
                    <li>
                        <a href = "affiliate/create">Create Affiliates</a>
                </ul>
            </nav>

            <h1>Showing {{ $affiliate["id"] }}</h1>

            <div class = "jumbotron text-center">
                <p>
                    <strong>Id:</strong> {{ $affiliate->id }}<br>
                </p>
                <p>
                    <strong>Affiliate Cake Id:</strong> {{ $affiliate->affiliate_cake_id }}<br>
                </p>
                <p>
                    <strong>Affiliate Name:</strong> {{ $affiliate->affiliate_name }}<br>
                </p>
                <p>
                    <strong>First Name:</strong> {{ $affiliate->first_name }}<br>
                </p>
                <p>
                    <strong>Last Name:</strong> {{ $affiliate->last_name }}<br>
                </p>
                <p>
                    <strong>Email:</strong> {{ $affiliate->email }}<br>
                </p>
                <p>
                    <strong>Cell:</strong> {{ $affiliate->cell }}<br>
                </p>
                <p>
                    <strong>Username:</strong> {{ $affiliate->username }}<br>
                </p>
                <p>
                    <strong>Is Active:</strong> {{ $affiliate->is_active }}<br>
                </p>
                <p>
                    <strong>Affiliate Code:</strong> {{ $affiliate->affiliate_code }}<br>
                </p>
                <p>
                    <strong>Fail Url:</strong> {{ $affiliate->fail_url }}<br>
                </p>
                <p>
                    <strong>Created At:</strong> {{ $affiliate->created_at }}<br>
                </p>
                <p>
                    <strong>Updated At:</strong> {{ $affiliate->updated_at }}<br>
                </p>
            </div>
        </div>
@stop
