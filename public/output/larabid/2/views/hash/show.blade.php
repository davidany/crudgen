@extends('base')

@section('content')
        <form method="post"  class="form-horizontal" action="hash/add">


    <div class="container">

        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
            	<a class="navbar-brand" href="hash/index">Hashes Page</a>
			</div>
            <ul class="nav navbar-nav">
                <li>
                    <a href="hash/index">View All Hashes</a>
                </li>
                <li>
                    <a href="hash/create">Create Hashes</a>
            </ul>
        </nav>

        <h1>Showing {{ $hash["id"] }}</h1>

	<div class="jumbotron text-center">
		<p>
	<strong>Id:</strong> {{ $hash->id }}<br>
</p><p>
	<strong>Created At:</strong> {{ $hash->created_at }}<br>
</p><p>
	<strong>Updated At:</strong> {{ $hash->updated_at }}<br>
</p>
	</div>
    </div>
@stop
