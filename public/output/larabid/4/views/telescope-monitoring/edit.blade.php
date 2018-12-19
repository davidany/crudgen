@extends('base')

@section('content')

    <div class="container">
		<h1>Edit Telescope Monitoring </h1>
        <form method="post"  class="form-horizontal" action="telescope-monitoring/update">

		<div class="form-group">
	<label class="" for="tag">Tag</label>
	<input type="text" class="form-control" name="tag" value="{{ $telescopeMonitoring->tag }}" id="tag">
</div>


	   <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Save Telescope Monitoring	</button>
			</div>
		</div>
		</form>
	</div>
@stop