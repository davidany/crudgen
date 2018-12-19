@extends('base')

@section('content')

    <div class="container">
		<h1>Edit Offers </h1>
        <form method="post"  class="form-horizontal" action="offer/update">

		<div class="form-group">
	<label class="" for="id">Id</label>
	<input type="text" class="form-control" name="id" value="{{ $offer->id }}" id="id">
</div>
<div class="form-group">
	<label class="" for="offer_pool_id">Offer Pool Id</label>
	<input type="text" class="form-control" name="offer_pool_id" value="{{ $offer->offer_pool_id }}" id="offer_pool_id">
</div>
<div class="form-group">
	<label class="" for="name">Name</label>
	<input type="text" class="form-control" name="name" value="{{ $offer->name }}" id="name">
</div>
<div class="form-group">
	<label class="" for="code">Code</label>
	<input type="text" class="form-control" name="code" value="{{ $offer->code }}" id="code">
</div>
<div class="form-group">
	<label class="" for="url">Url</label>
	<input type="text" class="form-control" name="url" value="{{ $offer->url }}" id="url">
</div>
<div class="form-group">
	<label class="" for="api">Api</label>
	<input type="text" class="form-control" name="api" value="{{ $offer->api }}" id="api">
</div>
<div class="form-group">
	<label class="" for="cost_per_click">Cost Per Click</label>
	<input type="text" class="form-control" name="cost_per_click" value="{{ $offer->cost_per_click }}" id="cost_per_click">
</div>
<div class="form-group">
	<label class="" for="is_active">Is Active</label>
	<input type="text" class="form-control" name="is_active" value="{{ $offer->is_active }}" id="is_active">
</div>
<div class="form-group">
	<label class="" for="priority">Priority</label>
	<input type="text" class="form-control" name="priority" value="{{ $offer->priority }}" id="priority">
</div>
<div class="form-group">
	<label class="" for="created_at">Created At</label>
	<input type="text" class="form-control" name="created_at" value="{{ $offer->created_at }}" id="created_at">
</div>
<div class="form-group">
	<label class="" for="updated_at">Updated At</label>
	<input type="text" class="form-control" name="updated_at" value="{{ $offer->updated_at }}" id="updated_at">
</div>


	   <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Save Offers	</button>
			</div>
		</div>
		</form>
	</div>
@stop