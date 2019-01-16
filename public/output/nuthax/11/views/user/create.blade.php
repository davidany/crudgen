@extends('base')

@section('content')

    <div class="container">
		<h1>Add Users </h1>
        <form method="post"  class="form-horizontal" action="user/add">

		<div class="form-group">
	<label class="" for="id">Id</label>
	<input type="text" class="form-control" name="id"  value="" id="id">
</div>

<div class="form-group">
	<label class="" for="name">Name</label>
	<input type="text" class="form-control" name="name"  value="" id="name">
</div>

<div class="form-group">
	<label class="" for="email">Email</label>
	<input type="text" class="form-control" name="email"  value="" id="email">
</div>

<div class="form-group">
	<label class="" for="email_verified_at">Email Verified At</label>
	<input type="text" class="form-control" name="email_verified_at"  value="" id="email_verified_at">
</div>

<div class="form-group">
	<label class="" for="password">Password</label>
	<input type="text" class="form-control" name="password"  value="" id="password">
</div>

<div class="form-group">
	<label class="" for="remember_token">Remember Token</label>
	<input type="text" class="form-control" name="remember_token"  value="" id="remember_token">
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
				<button type="submit" class="btn btn-primary">Save Users	</button>
			</div>
		</div>
		</form>
	</div>
@stop