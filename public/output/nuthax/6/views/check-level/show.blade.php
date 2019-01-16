@extends('base')

@section('content')
        <form method="post"  class="form-horizontal" action="check-level/add">


    <div class="container">

        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
            	<a class="navbar-brand" href="check-level/index">Check Levels Page</a>
			</div>
            <ul class="nav navbar-nav">
                <li>
                    <a href="check-level/index">View All Check Levels</a>
                </li>
                <li>
                    <a href="check-level/create">Create Check Levels</a>
            </ul>
        </nav>

        <h1>Showing {{ $checkLevel["id"] }}</h1>

	<div class="jumbotron text-center">
		<p>
	<strong>Id:</strong> {{ $checkLevel->id }}<br>
</p><p>
	<strong>Tinytiny:</strong> {{ $checkLevel->tinytiny }}<br>
</p><p>
	<strong>Decdec:</strong> {{ $checkLevel->decdec }}<br>
</p><p>
	<strong>Timetime:</strong> {{ $checkLevel->timetime }}<br>
</p><p>
	<strong>Datedatetime:</strong> {{ $checkLevel->datedatetime }}<br>
</p><p>
	<strong>Texttext:</strong> {{ $checkLevel->texttext }}<br>
</p><p>
	<strong>Boolbool:</strong> {{ $checkLevel->boolbool }}<br>
</p><p>
	<strong>Enumenum:</strong> {{ $checkLevel->enumenum }}<br>
</p><p>
	<strong>Stringstring:</strong> {{ $checkLevel->stringstring }}<br>
</p>
	</div>
    </div>
@stop
