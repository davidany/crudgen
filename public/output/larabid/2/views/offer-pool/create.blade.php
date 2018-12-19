@extends('base')

@section('content')

    <div class="container">
		<h1>Add Offer Pools </h1>
        <form method="post"  class="form-horizontal" action="offer-pool/add">

		<div class="form-group">
	<label class="" for="id">Id</label>
	<input type="text" class="form-control" name="id"  value="" id="id">
</div>

<div class="form-group">
	<label class="" for="type">Type</label>
	<input type="text" class="form-control" name="type"  value="" id="type">
</div>

<div class="form-group">
	<label class="" for="offer_pool_priority">Offer Pool Priority</label>
	<input type="text" class="form-control" name="offer_pool_priority"  value="" id="offer_pool_priority">
</div>

<div class="form-group">
	<label class="" for="is_active">Is Active</label>
	<input type="text" class="form-control" name="is_active"  value="" id="is_active">
</div>

<div class="form-group">
	<label class="" for="path_id">Path Id</label>
	<input type="text" class="form-control" name="path_id"  value="" id="path_id">
</div>

<div class="form-group">
	<label class="" for="has_loop">Has Loop</label>
	<input type="text" class="form-control" name="has_loop"  value="" id="has_loop">
</div>

<div class="form-group">
	<label class="" for="fail_url">Fail Url</label>
	<input type="text" class="form-control" name="fail_url"  value="" id="fail_url">
</div>

<div class="form-group">
	<label class="" for="non_loop_jump_destination">Non Loop Jump Destination</label>
	<input type="text" class="form-control" name="non_loop_jump_destination"  value="" id="non_loop_jump_destination">
</div>

<div class="form-group">
	<label class="" for="non_email_jump_destination">Non Email Jump Destination</label>
	<input type="text" class="form-control" name="non_email_jump_destination"  value="" id="non_email_jump_destination">
</div>

<div class="form-group">
	<label class="" for="non_id_jump_destination">Non Id Jump Destination</label>
	<input type="text" class="form-control" name="non_id_jump_destination"  value="" id="non_id_jump_destination">
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
				<button type="submit" class="btn btn-primary">Save Offer Pools	</button>
			</div>
		</div>
		</form>
	</div>
@stop