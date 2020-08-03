@extends('base')

@section('content')

    <div class="container">
		<h1>Add Version </h1>
        <form method="post"  class="form-horizontal" action="version/add">

		<div class="form-group">
	<label class="" for="id">Id</label>
	<input type="text" class="form-control" name="id"  value="" id="id">
</div>

<div class="form-group">
	<label class="" for="version_number">Version Number</label>
	<input type="text" class="form-control" name="version_number"  value="" id="version_number">
</div>

<div class="form-group">
	<label class="" for="version_folder_name">Version Folder Name</label>
	<input type="text" class="form-control" name="version_folder_name"  value="" id="version_folder_name">
</div>

<div class="form-group">
	<label class="" for="project_id">Project Id</label>
	<input type="text" class="form-control" name="project_id"  value="" id="project_id">
</div>



	   <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Save Version	</button>
			</div>
		</div>
		</form>
	</div>
@stop