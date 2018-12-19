@extends('base')

@section('content')

    <div class="container">
		<h1>Edit Telescope Entries </h1>
        <form method="post"  class="form-horizontal" action="telescope-entry/update">

		<div class="form-group">
	<label class="" for="sequence">Sequence</label>
	<input type="text" class="form-control" name="sequence" value="{{ $telescopeEntry->sequence }}" id="sequence">
</div>
<div class="form-group">
	<label class="" for="uuid">Uuid</label>
	<input type="text" class="form-control" name="uuid" value="{{ $telescopeEntry->uuid }}" id="uuid">
</div>
<div class="form-group">
	<label class="" for="batch_id">Batch Id</label>
	<input type="text" class="form-control" name="batch_id" value="{{ $telescopeEntry->batch_id }}" id="batch_id">
</div>
<div class="form-group">
	<label class="" for="family_hash">Family Hash</label>
	<input type="text" class="form-control" name="family_hash" value="{{ $telescopeEntry->family_hash }}" id="family_hash">
</div>
<div class="form-group">
	<label class="" for="should_display_on_index">Should Display On Index</label>
	<input type="text" class="form-control" name="should_display_on_index" value="{{ $telescopeEntry->should_display_on_index }}" id="should_display_on_index">
</div>
<div class="form-group">
	<label class="" for="type">Type</label>
	<input type="text" class="form-control" name="type" value="{{ $telescopeEntry->type }}" id="type">
</div>
<div class="form-group">
	<label class="" for="content">Content</label>
	<input type="text" class="form-control" name="content" value="{{ $telescopeEntry->content }}" id="content">
</div>
<div class="form-group">
	<label class="" for="created_at">Created At</label>
	<input type="text" class="form-control" name="created_at" value="{{ $telescopeEntry->created_at }}" id="created_at">
</div>


	   <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Save Telescope Entries	</button>
			</div>
		</div>
		</form>
	</div>
@stop