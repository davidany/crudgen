@extends('base')

@section('content')

    <div class="container">
		<h1>Add Visitors </h1>
        <form method="post"  class="form-horizontal" action="visitor/add">

		<div class="form-group">
	<label class="" for="id">Id</label>
	<input type="text" class="form-control" name="id"  value="" id="id">
</div>

<div class="form-group">
	<label class="" for="affiliate_cake_id">Affiliate Cake Id</label>
	<input type="text" class="form-control" name="affiliate_cake_id"  value="" id="affiliate_cake_id">
</div>

<div class="form-group">
	<label class="" for="email">Email</label>
	<input type="text" class="form-control" name="email"  value="" id="email">
</div>

<div class="form-group">
	<label class="" for="ip_address">Ip Address</label>
	<input type="text" class="form-control" name="ip_address"  value="" id="ip_address">
</div>

<div class="form-group">
	<label class="" for="incoming_url">Incoming Url</label>
	<input type="text" class="form-control" name="incoming_url"  value="" id="incoming_url">
</div>

<div class="form-group">
	<label class="" for="outgoing_url">Outgoing Url</label>
	<input type="text" class="form-control" name="outgoing_url"  value="" id="outgoing_url">
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
				<button type="submit" class="btn btn-primary">Save Visitors	</button>
			</div>
		</div>
		</form>
	</div>
@stop