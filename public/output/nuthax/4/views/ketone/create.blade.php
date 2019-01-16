@extends('base')

@section('content')

    <div class="container">
		<h1>Add Ketones </h1>
        <form method="post"  class="form-horizontal" action="ketone/add">

		<div class="form-group">
	<label class="" for="id">Id</label>
	<input type="text" class="form-control" name="id"  value="" id="id">
</div>

<div class="form-group">
	<label class="" for="level">Level</label>
	<input type="text" class="form-control" name="level"  value="" id="level">
</div>

<div class="form-group">
	<label class="" for="units">Units</label>
	<input type="text" class="form-control" name="units"  value="" id="units">
</div>

<div class="form-group">
	<label class="" for="user_id">User Id</label>
	<input type="text" class="form-control" name="user_id"  value="" id="user_id">
</div>



	   <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Save Ketones	</button>
			</div>
		</div>
		</form>
	</div>
@stop