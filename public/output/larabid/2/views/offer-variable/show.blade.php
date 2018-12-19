@extends('base')

@section('content')
        <form method="post"  class="form-horizontal" action="offer-variable/add">


    <div class="container">

        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
            	<a class="navbar-brand" href="offer-variable/index">Offer Variables Page</a>
			</div>
            <ul class="nav navbar-nav">
                <li>
                    <a href="offer-variable/index">View All Offer Variables</a>
                </li>
                <li>
                    <a href="offer-variable/create">Create Offer Variables</a>
            </ul>
        </nav>

        <h1>Showing {{ $offerVariable["id"] }}</h1>

	<div class="jumbotron text-center">
		<p>
	<strong>Id:</strong> {{ $offerVariable->id }}<br>
</p><p>
	<strong>Created At:</strong> {{ $offerVariable->created_at }}<br>
</p><p>
	<strong>Updated At:</strong> {{ $offerVariable->updated_at }}<br>
</p>
	</div>
    </div>
@stop
