@extends('base')

@section('content')
        <form method="post"  class="form-horizontal" action="db-credential/add">


    <div class="container">

        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
            	<a class="navbar-brand" href="db-credential/index">Db Credential Page</a>
			</div>
            <ul class="nav navbar-nav">
                <li>
                    <a href="db-credential/index">View All Db Credential</a>
                </li>
                <li>
                    <a href="db-credential/create">Create Db Credential</a>
            </ul>
        </nav>

        <h1>Showing {{ $dbCredential["id"] }}</h1>

	<div class="jumbotron text-center">
		<p>
	<strong>Id:</strong> {{ $dbCredential->id }}<br>
</p><p>
	<strong>Host:</strong> {{ $dbCredential->host }}<br>
</p><p>
	<strong>Database:</strong> {{ $dbCredential->database }}<br>
</p><p>
	<strong>Username:</strong> {{ $dbCredential->username }}<br>
</p><p>
	<strong>Password:</strong> {{ $dbCredential->password }}<br>
</p><p>
	<strong>Project Id:</strong> {{ $dbCredential->project_id }}<br>
</p>
	</div>
    </div>
@stop
