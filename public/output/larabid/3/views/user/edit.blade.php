@extends('base')

@section('content')

    <div class="container">
		<h1>Edit Users </h1>
        <form method="post"  class="form-horizontal" action="user/update">

		<div class="form-group">
	<label class="" for="id">Id</label>
	<input type="text" class="form-control" name="id" value="{{ $user->id }}" id="id">
</div>
<div class="form-group">
	<label class="" for="name">Name</label>
	<input type="text" class="form-control" name="name" value="{{ $user->name }}" id="name">
</div>
<div class="form-group">
	<label class="" for="email">Email</label>
	<input type="text" class="form-control" name="email" value="{{ $user->email }}" id="email">
</div>
<div class="form-group">
	<label class="" for="password">Password</label>
	<input type="text" class="form-control" name="password" value="{{ $user->password }}" id="password">
</div>
<div class="form-group">
	<label class="" for="remember_token">Remember Token</label>
	<input type="text" class="form-control" name="remember_token" value="{{ $user->remember_token }}" id="remember_token">
</div>
<div class="form-group">
	<label class="" for="created_at">Created At</label>
	<input type="text" class="form-control" name="created_at" value="{{ $user->created_at }}" id="created_at">
</div>
<div class="form-group">
	<label class="" for="updated_at">Updated At</label>
	<input type="text" class="form-control" name="updated_at" value="{{ $user->updated_at }}" id="updated_at">
</div>


	   <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Save Users	</button>
			</div>
		</div>
		</form>
	</div>
@stop