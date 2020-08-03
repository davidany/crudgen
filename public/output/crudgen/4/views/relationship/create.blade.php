@extends('base')

@section('content')

    <div class="container">
		<h1>Add Relationship </h1>
        <form method="post"  class="form-horizontal" action="relationship/add">

		<div class="form-group">
	<label class="" for="id">Id</label>
	<input type="text" class="form-control" name="id"  value="" id="id">
</div>

<div class="form-group">
	<label class="" for="first_table">First Table</label>
	<input type="text" class="form-control" name="first_table"  value="" id="first_table">
</div>

<div class="form-group">
	<label class="" for="relationship_type">Relationship Type</label>
	<input type="text" class="form-control" name="relationship_type"  value="" id="relationship_type">
</div>

<div class="form-group">
	<label class="" for="related_table">Related Table</label>
	<input type="text" class="form-control" name="related_table"  value="" id="related_table">
</div>

<div class="form-group">
	<label class="" for="project_id">Project Id</label>
	<input type="text" class="form-control" name="project_id"  value="" id="project_id">
</div>



	   <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Save Relationship	</button>
			</div>
		</div>
		</form>
	</div>
@stop