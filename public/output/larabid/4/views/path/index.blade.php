@extends('base')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Paths </div>


						<!-- will be used to show any messages -->
						@if (Session::has('message'))
							<div class="alert alert-info">{{ Session::get('message') }}</div>
						@endif

						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<td scope="col">Id</td><td scope="col">Affiliate Id</td><td scope="col">Is Active</td><td scope="col">Name</td><td scope="col">Has Hash Id</td><td scope="col">Has Variable Alias</td><td scope="col">Fail Url</td><td scope="col">Type</td><td scope="col">Created At</td><td scope="col">Updated At</td>
									<td scope="col">Actions</td>

								</tr>
							</thead>
							<tbody>
								@if ($paths)
								   @foreach($paths as $path)
								<tr>
									<td>{{$path["id"]}}</td><td>{{$path["affiliate_id"]}}</td><td>{{$path["is_active"]}}</td><td>{{$path["name"]}}</td><td>{{$path["has_hash_id"]}}</td><td>{{$path["has_variable_alias"]}}</td><td>{{$path["fail_url"]}}</td><td>{{$path["type"]}}</td><td>{{$path["created_at"]}}</td><td>{{$path["updated_at"]}}</td>
									<td>
										<div class="form-group">
										<a class="btn btn-sm btn-info" href="/path/edit/{{$path['id']}}">Edit</a>

										 </div>
										<a class="btn btn-sm btn-info" href="/path/destroy/{{$path['id']}}">Delete</a>
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
