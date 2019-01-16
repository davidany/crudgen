@extends('base')

@section('content')

    <div class="container">
		<h1>Edit Ketones </h1>
        <form method="post"  class="form-horizontal" action="ketone/update">

		<div class="form-group">
	<label class="" for="id">Id</label>
	<input type="text" class="form-control" name="id" value="{{ $ketone->id }}" id="id">
</div>
<div class="form-group">
	<label class="" for="level">Level</label>
	<input type="text" class="form-control" name="level" value="{{ $ketone->level }}" id="level">
</div>
<div class="form-group">
	<label class="" for="units">Units</label>
	<input type="text" class="form-control" name="units" value="{{ $ketone->units }}" id="units">
</div>
<div class="form-group">
	<label class="" for="user_id">User Id</label>
	<input type="text" class="form-control" name="user_id" value="{{ $ketone->user_id }}" id="user_id">
</div>


	   <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Save Ketones	</button>
			</div>
		</div>
		</form>
	</div>
@stop