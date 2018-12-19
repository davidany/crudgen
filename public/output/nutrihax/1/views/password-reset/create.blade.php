@extends('base')

@section('content')

    <div class="container">
		<h1>Add Password Resets </h1>
        <form method="post"  class="form-horizontal" action="password-reset/add">

		<div class="form-group">
	<label class="" for="email">Email</label>
	<input type="text" class="form-control" name="email"  value="" id="email">
</div>

<div class="form-group">
	<label class="" for="token">Token</label>
	<input type="text" class="form-control" name="token"  value="" id="token">
</div>

<div class="form-group">
	<label class="" for="created_at">Created At</label>
	<input type="text" class="form-control" name="created_at"  value="" id="created_at">
</div>



	   <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Save Password Resets	</button>
			</div>
		</div>
		</form>
	</div>
@stop