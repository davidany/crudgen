@extends('base')

@section('content')

    <div class="container">
		<h1>Edit Relationship </h1>
        <form method="post"  class="form-horizontal" action="relationship/update">

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
	<label class="" for="id">Id</label>
	<input type="text" class="form-control" name="id" value="{{ $project->id }}" id="id">
</div>
<div class="form-group">
	<label class="" for="name">Name</label>
	<input type="text" class="form-control" name="name" value="{{ $project->name }}" id="name">
</div>
<div class="form-group">
	<label class="" for="directory">Directory</label>
	<input type="text" class="form-control" name="directory" value="{{ $project->directory }}" id="directory">
</div>
<div class="form-group">
	<label class="" for="id">Id</label>
	<input type="text" class="form-control" name="id" value="{{ $relationship->id }}" id="id">
</div>
<div class="form-group">
	<label class="" for="first_table">First Table</label>
	<input type="text" class="form-control" name="first_table" value="{{ $relationship->first_table }}" id="first_table">
</div>
<div class="form-group">
	<label class="" for="relationship_type">Relationship Type</label>
	<input type="text" class="form-control" name="relationship_type" value="{{ $relationship->relationship_type }}" id="relationship_type">
</div>
<div class="form-group">
	<label class="" for="related_table">Related Table</label>
	<input type="text" class="form-control" name="related_table" value="{{ $relationship->related_table }}" id="related_table">
</div>
<div class="form-group">
	<label class="" for="project_id">Project Id</label>
	<input type="text" class="form-control" name="project_id" value="{{ $relationship->project_id }}" id="project_id">
</div>


	   <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Save Relationship	</button>
			</div>
		</div>
		</form>
	</div>
@stop