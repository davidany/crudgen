@extends('base')

@section('content')
        <form method="post"  class="form-horizontal" action="user/add">


    <div class="container">

        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
            	<a class="navbar-brand" href="user/index">Users Page</a>
			</div>
            <ul class="nav navbar-nav">
                <li>
                    <a href="user/index">View All Users</a>
                </li>
                <li>
                    <a href="user/create">Create Users</a>
            </ul>
        </nav>

        <h1>Showing {{ $user["id"] }}</h1>

	<div class="jumbotron text-center">
		<p>
	<strong>Id:</strong> {{ $user->id }}<br>
</p><p>
	<strong>Name:</strong> {{ $user->name }}<br>
</p><p>
	<strong>Email:</strong> {{ $user->email }}<br>
</p><p>
	<strong>Email Verified At:</strong> {{ $user->email_verified_at }}<br>
</p><p>
	<strong>Password:</strong> {{ $user->password }}<br>
</p><p>
	<strong>Remember Token:</strong> {{ $user->remember_token }}<br>
</p><p>
	<strong>Created At:</strong> {{ $user->created_at }}<br>
</p><p>
	<strong>Updated At:</strong> {{ $user->updated_at }}<br>
</p>
	</div>
    </div>
@stop
