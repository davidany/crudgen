@extends('base')

@section('content')

    <div class="container">
		<h1>Add Weights </h1>
        <form method="post"  class="form-horizontal" action="weight/add">

		<div class="form-group">
	<label class="" for="id">Id</label>
	<input type="text" class="form-control" name="id"  value="" id="id">
</div>

<div class="form-group">
	<label class="" for="weight">Weight</label>
	<input type="text" class="form-control" name="weight"  value="" id="weight">
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
				<button type="submit" class="btn btn-primary">Save Weights	</button>
			</div>
		</div>
		</form>
	</div>
@stop