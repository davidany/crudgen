@extends('base')

@section('content')
        <form method="post"  class="form-horizontal" action="offer-log/add">


    <div class="container">

        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
            	<a class="navbar-brand" href="offer-log/index">Offer Logs Page</a>
			</div>
            <ul class="nav navbar-nav">
                <li>
                    <a href="offer-log/index">View All Offer Logs</a>
                </li>
                <li>
                    <a href="offer-log/create">Create Offer Logs</a>
            </ul>
        </nav>

        <h1>Showing {{ $offerLog["id"] }}</h1>

	<div class="jumbotron text-center">
		<p>
	<strong>Id:</strong> {{ $offerLog->id }}<br>
</p><p>
	<strong>Path Id:</strong> {{ $offerLog->path_id }}<br>
</p><p>
	<strong>Offer Pool Id:</strong> {{ $offerLog->offer_pool_id }}<br>
</p><p>
	<strong>Offer Id:</strong> {{ $offerLog->offer_id }}<br>
</p><p>
	<strong>Visitor Id:</strong> {{ $offerLog->visitor_id }}<br>
</p><p>
	<strong>Email:</strong> {{ $offerLog->email }}<br>
</p><p>
	<strong>Ip Address:</strong> {{ $offerLog->ip_address }}<br>
</p><p>
	<strong>Created At:</strong> {{ $offerLog->created_at }}<br>
</p><p>
	<strong>Updated At:</strong> {{ $offerLog->updated_at }}<br>
</p>
	</div>
    </div>
@stop
