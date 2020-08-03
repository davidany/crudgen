@extends('base')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Version </div>


						<!-- will be used to show any messages -->
						@if (Session::has('message'))
							<div class="alert alert-info">{{ Session::get('message') }}</div>
						@endif

						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<td scope="col">Id</td><td scope="col">Version Number</td><td scope="col">Version Folder Name</td><td scope="col">Project Id</td>
									<td scope="col">Actions</td>

								</tr>
							</thead>
							<tbody>
								@if ($version)
								   @foreach($version as $version)
								<tr>
									<td>{{$version["id"]}}</td><td>{{$version["version_number"]}}</td><td>{{$version["version_folder_name"]}}</td><td>{{$version["project_id"]}}</td>
									<td>
										<div class="form-group">
										<a class="btn btn-sm btn-info" href="/version/edit/{{$version['id']}}">Edit</a>

										 </div>
										<a class="btn btn-sm btn-info" href="/version/destroy/{{$version['id']}}">Delete</a>
										</td>
								</tr>
						@endforeach
					@endif
					</tbody>
				</table>

			</div>
		</div>
	</div>
</div>
    </div>
   @stop
