@extends('base')

@section('content')

    <div class="container">
		<h1>Add Paths </h1>
        <form method="post"  class="form-horizontal" action="path/add">

		<div class="form-group">
	<label class="" for="id">Id</label>
	<input type="text" class="form-control" name="id"  value="" id="id">
</div>

<div class="form-group">
	<label class="" for="affiliate_id">Affiliate Id</label>
	<input type="text" class="form-control" name="affiliate_id"  value="" id="affiliate_id">
</div>

<div class="form-group">
	<label class="" for="is_active">Is Active</label>
	<input type="text" class="form-control" name="is_active"  value="" id="is_active">
</div>

<div class="form-group">
	<label class="" for="name">Name</label>
	<input type="text" class="form-control" name="name"  value="" id="name">
</div>

<div class="form-group">
	<label class="" for="has_hash_id">Has Hash Id</label>
	<input type="text" class="form-control" name="has_hash_id"  value="" id="has_hash_id">
</div>

<div class="form-group">
	<label class="" for="has_variable_alias">Has Variable Alias</label>
	<input type="text" class="form-control" name="has_variable_alias"  value="" id="has_variable_alias">
</div>

<div class="form-group">
	<label class="" for="fail_url">Fail Url</label>
	<input type="text" class="form-control" name="fail_url"  value="" id="fail_url">
</div>

<div class="form-group">
	<label class="" for="type">Type</label>
	<input type="text" class="form-control" name="type"  value="" id="type">
</div>

<div class="form-group">
	<label class="" for="created_at">Created At</label>
	<input type="text" class="form-control" name="created_at"  value="" id="created_at">
</div>

<div class="form-group">
	<label class="" for="updated_at">Updated At</label>
	<input type="text" class="form-control" name="updated_at"  value="" id="updated_at">
</div>



	   <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Save Paths	</button>
			</div>
		</div>
		</form>
	</div>
@stop