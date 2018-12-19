@extends('base')

@section('content')
        <form method="post"  class="form-horizontal" action="relationship/add">


    <div class="container">

        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
            	<a class="navbar-brand" href="relationship/index">Relationship Page</a>
			</div>
            <ul class="nav navbar-nav">
                <li>
                    <a href="relationship/index">View All Relationship</a>
                </li>
                <li>
                    <a href="relationship/create">Create Relationship</a>
            </ul>
        </nav>

        <h1>Showing {{ $relationship["id"] }}</h1>

	<div class="jumbotron text-center">
		<p>
	<strong>Id:</strong> {{ $relationship->id }}<br>
</p><p>
	<strong>First Table:</strong> {{ $relationship->first_table }}<br>
</p><p>
	<strong>Relationship Type:</strong> {{ $relationship->relationship_type }}<br>
</p><p>
	<strong>Related Table:</strong> {{ $relationship->related_table }}<br>
</p><p>
	<strong>Project Id:</strong> {{ $relationship->project_id }}<br>
</p>
	</div>
    </div>
@stop
