@extends('base')

@section('content')
        <form method="post"  class="form-horizontal" action="password-reset/add">


    <div class="container">

        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
            	<a class="navbar-brand" href="password-reset/index">Password Resets Page</a>
			</div>
            <ul class="nav navbar-nav">
                <li>
                    <a href="password-reset/index">View All Password Resets</a>
                </li>
                <li>
                    <a href="password-reset/create">Create Password Resets</a>
            </ul>
        </nav>

        <h1>Showing {{ $passwordReset["id"] }}</h1>

	<div class="jumbotron text-center">
		<p>
	<strong>Email:</strong> {{ $passwordReset->email }}<br>
</p><p>
	<strong>Token:</strong> {{ $passwordReset->token }}<br>
</p><p>
	<strong>Created At:</strong> {{ $passwordReset->created_at }}<br>
</p>
	</div>
    </div>
@stop
