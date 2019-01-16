@extends('base')

@section('content')
        <form method="post"  class="form-horizontal" action="ketone/add">


    <div class="container">

        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
            	<a class="navbar-brand" href="ketone/index">Ketones Page</a>
			</div>
            <ul class="nav navbar-nav">
                <li>
                    <a href="ketone/index">View All Ketones</a>
                </li>
                <li>
                    <a href="ketone/create">Create Ketones</a>
            </ul>
        </nav>

        <h1>Showing {{ $ketone["id"] }}</h1>

	<div class="jumbotron text-center">
		<p>
	<strong>Id:</strong> {{ $ketone->id }}<br>
</p><p>
	<strong>Level:</strong> {{ $ketone->level }}<br>
</p><p>
	<strong>Units:</strong> {{ $ketone->units }}<br>
</p><p>
	<strong>User Id:</strong> {{ $ketone->user_id }}<br>
</p>
	</div>
    </div>
@stop
