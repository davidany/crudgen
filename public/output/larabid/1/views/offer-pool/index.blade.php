@extends('base')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Offer Pools </div>


						<!-- will be used to show any messages -->
						@if (Session::has('message'))
							<div class="alert alert-info">{{ Session::get('message') }}</div>
						@endif

						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<td scope="col">Id</td><td scope="col">Type</td><td scope="col">Offer Pool Priority</td><td scope="col">Is Active</td><td scope="col">Path Id</td><td scope="col">Has Loop</td><td scope="col">Fail Url</td><td scope="col">Non Active Jump Destination</td><td scope="col">Non Loop Jump Destination</td><td scope="col">Non Email Jump Destination</td><td scope="col">Non Id Jump Destination</td><td scope="col">Created At</td><td scope="col">Updated At</td>
									<td scope="col">Actions</td>

								</tr>
							</thead>
							<tbody>
								@if ($offerPools)
								   @foreach($offerPools as $offerPool)
								<tr>
									<td>{{$offerPool["id"]}}</td><td>{{$offerPool["type"]}}</td><td>{{$offerPool["offer_pool_priority"]}}</td><td>{{$offerPool["is_active"]}}</td><td>{{$offerPool["path_id"]}}</td><td>{{$offerPool["has_loop"]}}</td><td>{{$offerPool["fail_url"]}}</td><td>{{$offerPool["non_active_jump_destination"]}}</td><td>{{$offerPool["non_loop_jump_destination"]}}</td><td>{{$offerPool["non_email_jump_destination"]}}</td><td>{{$offerPool["non_id_jump_destination"]}}</td><td>{{$offerPool["created_at"]}}</td><td>{{$offerPool["updated_at"]}}</td>
									<td>
										<div class="form-group">
										<a class="btn btn-sm btn-info" href="/offer-pool/{{$offerPool['id']}}">Edit</a>

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
