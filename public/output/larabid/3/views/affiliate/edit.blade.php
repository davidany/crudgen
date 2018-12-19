@extends('base')

@section('content')

    <div class="container">
		<h1>Edit Affiliates </h1>
        <form method="post"  class="form-horizontal" action="affiliate/update">

		<div class="form-group">
	<label class="" for="id">Id</label>
	<input type="text" class="form-control" name="id" value="{{ $affiliate->id }}" id="id">
</div>
<div class="form-group">
	<label class="" for="affiliate_cake_id">Affiliate Cake Id</label>
	<input type="text" class="form-control" name="affiliate_cake_id" value="{{ $affiliate->affiliate_cake_id }}" id="affiliate_cake_id">
</div>
<div class="form-group">
	<label class="" for="affiliate_name">Affiliate Name</label>
	<input type="text" class="form-control" name="affiliate_name" value="{{ $affiliate->affiliate_name }}" id="affiliate_name">
</div>
<div class="form-group">
	<label class="" for="first_name">First Name</label>
	<input type="text" class="form-control" name="first_name" value="{{ $affiliate->first_name }}" id="first_name">
</div>
<div class="form-group">
	<label class="" for="last_name">Last Name</label>
	<input type="text" class="form-control" name="last_name" value="{{ $affiliate->last_name }}" id="last_name">
</div>
<div class="form-group">
	<label class="" for="email">Email</label>
	<input type="text" class="form-control" name="email" value="{{ $affiliate->email }}" id="email">
</div>
<div class="form-group">
	<label class="" for="cell">Cell</label>
	<input type="text" class="form-control" name="cell" value="{{ $affiliate->cell }}" id="cell">
</div>
<div class="form-group">
	<label class="" for="username">Username</label>
	<input type="text" class="form-control" name="username" value="{{ $affiliate->username }}" id="username">
</div>
<div class="form-group">
	<label class="" for="is_active">Is Active</label>
	<input type="text" class="form-control" name="is_active" value="{{ $affiliate->is_active }}" id="is_active">
</div>
<div class="form-group">
	<label class="" for="affiliate_code">Affiliate Code</label>
	<input type="text" class="form-control" name="affiliate_code" value="{{ $affiliate->affiliate_code }}" id="affiliate_code">
</div>
<div class="form-group">
	<label class="" for="fail_url">Fail Url</label>
	<input type="text" class="form-control" name="fail_url" value="{{ $affiliate->fail_url }}" id="fail_url">
</div>
<div class="form-group">
	<label class="" for="created_at">Created At</label>
	<input type="text" class="form-control" name="created_at" value="{{ $affiliate->created_at }}" id="created_at">
</div>
<div class="form-group">
	<label class="" for="updated_at">Updated At</label>
	<input type="text" class="form-control" name="updated_at" value="{{ $affiliate->updated_at }}" id="updated_at">
</div>


	   <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Save Affiliates	</button>
			</div>
		</div>
		</form>
	</div>
@stop