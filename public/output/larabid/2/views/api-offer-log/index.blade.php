@extends('base')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Api Offer Logs </div>


						<!-- will be used to show any messages -->
						@if (Session::has('message'))
							<div class="alert alert-info">{{ Session::get('message') }}</div>
						@endif

						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<td scope="col">Id</td><td scope="col">Api Success</td><td scope="col">Network</td><td scope="col">Var1</td><td scope="col">Var2</td><td scope="col">Var3</td><td scope="col">Cid</td><td scope="col">Cid2</td><td scope="col">Cid3</td><td scope="col">Posted Url</td><td scope="col">Error Code</td><td scope="col">Error Description</td><td scope="col">Visitor Id</td><td scope="col">Api Offer Id</td><td scope="col">Created At</td><td scope="col">Updated At</td>
									<td scope="col">Actions</td>

								</tr>
							</thead>
							<tbody>
								@if ($apiOfferLogs)
								   @foreach($apiOfferLogs as $apiOfferLog)
								<tr>
									<td>{{$apiOfferLog["id"]}}</td><td>{{$apiOfferLog["api_success"]}}</td><td>{{$apiOfferLog["network"]}}</td><td>{{$apiOfferLog["var1"]}}</td><td>{{$apiOfferLog["var2"]}}</td><td>{{$apiOfferLog["var3"]}}</td><td>{{$apiOfferLog["cid"]}}</td><td>{{$apiOfferLog["cid2"]}}</td><td>{{$apiOfferLog["cid3"]}}</td><td>{{$apiOfferLog["posted_url"]}}</td><td>{{$apiOfferLog["error_code"]}}</td><td>{{$apiOfferLog["error_description"]}}</td><td>{{$apiOfferLog["visitor_id"]}}</td><td>{{$apiOfferLog["api_offer_id"]}}</td><td>{{$apiOfferLog["created_at"]}}</td><td>{{$apiOfferLog["updated_at"]}}</td>
									<td>
										<div class="form-group">
										<a class="btn btn-sm btn-info" href="/api-offer-log/edit/{{$apiOfferLog['id']}}">Edit</a>

										 </div>
										<a class="btn btn-sm btn-info" href="/api-offer-log/destroy/{{$apiOfferLog['id']}}">Delete</a>
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
