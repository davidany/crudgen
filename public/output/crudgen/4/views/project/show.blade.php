@extends('base')

@section('content')
        <form method="post"  class="form-horizontal" action="project/add">


    <div class="container">

        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
            	<a class="navbar-brand" href="project/index">Project Page</a>
			</div>
            <ul class="nav navbar-nav">
                <li>
                    <a href="project/index">View All Project</a>
                </li>
                <li>
                    <a href="project/create">Create Project</a>
            </ul>
        </nav>

        <h1>Showing {{ $project["id"] }}</h1>

	<div class="jumbotron text-center">
		<p>
	<strong>Id:</strong> {{ $project->id }}<br>
</p><p>
	<strong>Name:</strong> {{ $project->name }}<br>
</p><p>
	<strong>Directory:</strong> {{ $project->directory }}<br>
</p>
	</div>
    </div>
@stop
