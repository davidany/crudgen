@extends('base')

@section('content')
        <form method="post"  class="form-horizontal" action="weight/add">


    <div class="container">

        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
            	<a class="navbar-brand" href="weight/index">Weights Page</a>
			</div>
            <ul class="nav navbar-nav">
                <li>
                    <a href="weight/index">View All Weights</a>
                </li>
                <li>
                    <a href="weight/create">Create Weights</a>
            </ul>
        </nav>

        <h1>Showing {{ $weight["id"] }}</h1>

	<div class="jumbotron text-center">
		<p>
	<strong>Id:</strong> {{ $weight->id }}<br>
</p><p>
	<strong>Weight:</strong> {{ $weight->weight }}<br>
</p><p>
	<strong>Units:</strong> {{ $weight->units }}<br>
</p><p>
	<strong>User Id:</strong> {{ $weight->user_id }}<br>
</p>
	</div>
    </div>
@stop
