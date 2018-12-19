@extends('base')

@section('content')

    <div class="container">
		<h1>Add Db Credential </h1>
        <form method="post"  class="form-horizontal" action="db-credential/add">

		<div class="form-group">
	<label class="" for="id">Id</label>
	<input type="text" class="form-control" name="id"  value="" id="id">
</div>

<div class="form-group">
	<label class="" for="host">Host</label>
	<input type="text" class="form-control" name="host"  value="" id="host">
</div>

<div class="form-group">
	<label class="" for="database">Database</label>
	<input type="text" class="form-control" name="database"  value="" id="database">
</div>

<div class="form-group">
	<label class="" for="username">Username</label>
	<input type="text" class="form-control" name="username"  value="" id="username">
</div>

<div class="form-group">
	<label class="" for="password">Password</label>
	<input type="text" class="form-control" name="password"  value="" id="password">
</div>

<div class="form-group">
	<label class="" for="project_id">Project Id</label>
	<input type="text" class="form-control" name="project_id"  value="" id="project_id">
</div>



	   <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Save Db Credential	</button>
			</div>
		</div>
		</form>
	</div>
@stop