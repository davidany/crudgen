@extends('base')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Query Aliases </div>


						<!-- will be used to show any messages -->
						@if (Session::has('message'))
							<div class="alert alert-info">{{ Session::get('message') }}</div>
						@endif

						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<td scope="col">Id</td><td scope="col">Path Id</td><td scope="col">Created At</td><td scope="col">Updated At</td>
									<td scope="col">Actions</td>

								</tr>
							</thead>
							<tbody>
								@if ($queryAliases)
								   @foreach($queryAliases as $queryAlias)
								<tr>
									<td>{{$queryAlias["id"]}}</td><td>{{$queryAlias["path_id"]}}</td><td>{{$queryAlias["created_at"]}}</td><td>{{$queryAlias["updated_at"]}}</td>
									<td>
										<div class="form-group">
										<a class="btn btn-sm btn-info" href="/query-alias/{{$queryAlias['id']}}">Edit</a>

										 </div>
										<a class="btn btn-sm btn-danger" href="#">Delete</a>
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
