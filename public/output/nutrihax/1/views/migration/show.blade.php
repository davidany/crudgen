@extends('base')

@section('content')
        <form method="post"  class="form-horizontal" action="migration/add">


    <div class="container">

        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
            	<a class="navbar-brand" href="migration/index">Migrations Page</a>
			</div>
            <ul class="nav navbar-nav">
                <li>
                    <a href="migration/index">View All Migrations</a>
                </li>
                <li>
                    <a href="migration/create">Create Migrations</a>
            </ul>
        </nav>

        <h1>Showing {{ $migration["id"] }}</h1>

	<div class="jumbotron text-center">
		<p>
	<strong>Id:</strong> {{ $migration->id }}<br>
</p><p>
	<strong>Migration:</strong> {{ $migration->migration }}<br>
</p><p>
	<strong>Batch:</strong> {{ $migration->batch }}<br>
</p>
	</div>
    </div>
@stop
