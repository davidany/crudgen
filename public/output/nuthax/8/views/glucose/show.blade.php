@extends('base')

@section('content')
        <form method="post"  class="form-horizontal" action="glucose/add">


    <div class="container">

        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
            	<a class="navbar-brand" href="glucose/index">Glucoses Page</a>
			</div>
            <ul class="nav navbar-nav">
                <li>
                    <a href="glucose/index">View All Glucoses</a>
                </li>
                <li>
                    <a href="glucose/create">Create Glucoses</a>
            </ul>
        </nav>

        <h1>Showing {{ $glucose["id"] }}</h1>

	<div class="jumbotron text-center">
		<p>
	<strong>Id:</strong> {{ $glucose->id }}<br>
</p><p>
	<strong>Level:</strong> {{ $glucose->level }}<br>
</p><p>
	<strong>Glucosecol:</strong> {{ $glucose->glucosecol }}<br>
</p><p>
	<strong>Units:</strong> {{ $glucose->units }}<br>
</p><p>
	<strong>User Id:</strong> {{ $glucose->user_id }}<br>
</p>
	</div>
    </div>
@stop
