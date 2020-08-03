@extends('base')

@section('content')

    <div class="container">
		<h1>Edit Db Credential </h1>
        <form method="post"  class="form-horizontal" action="db-credential/update">

		<div class="form-group">
	<label class="" for="id">Id</label>
	<input type="text" class="form-control" name="id" value="{{ $dbCredential->id }}" id="id">
</div>
<div class="form-group">
	<label class="" for="host">Host</label>
	<input type="text" class="form-control" name="host" value="{{ $dbCredential->host }}" id="host">
</div>
<div class="form-group">
	<label class="" for="database">Database</label>
	<input type="text" class="form-control" name="database" value="{{ $dbCredential->database }}" id="database">
</div>
<div class="form-group">
	<label class="" for="username">Username</label>
	<input type="text" class="form-control" name="username" value="{{ $dbCredential->username }}" id="username">
</div>
<div class="form-group">
	<label class="" for="password">Password</label>
	<input type="text" class="form-control" name="password" value="{{ $dbCredential->password }}" id="password">
</div>
<div class="form-group">
	<label class="" for="project_id">Project Id</label>
	<input type="text" class="form-control" name="project_id" value="{{ $dbCredential->project_id }}" id="project_id">
</div>


	   <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Save Db Credential	</button>
			</div>
		</div>
		</form>
	</div>
@stop