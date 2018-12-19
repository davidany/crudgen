@extends('base')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Api Offers </div>


						<!-- will be used to show any messages -->
						@if (Session::has('message'))
							<div class="alert alert-info">{{ Session::get('message') }}</div>
						@endif

						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<td scope="col">Id</td><td scope="col">Api Code</td><td scope="col">Api Name</td><td scope="col">Api Url</td><td scope="col">Api User Name</td><td scope="col">Api Password</td><td scope="col">Api Key</td><td scope="col">Api Hash Key</td><td scope="col">Created At</td><td scope="col">Updated At</td>
									<td scope="col">Actions</td>

								</tr>
							</thead>
							<tbody>
								@if ($apiOffers)
								   @foreach($apiOffers as $apiOffer)
								<tr>
									<td>{{$apiOffer["id"]}}</td><td>{{$apiOffer["api_code"]}}</td><td>{{$apiOffer["api_name"]}}</td><td>{{$apiOffer["api_url"]}}</td><td>{{$apiOffer["api_user_name"]}}</td><td>{{$apiOffer["api_password"]}}</td><td>{{$apiOffer["api_key"]}}</td><td>{{$apiOffer["api_hash_key"]}}</td><td>{{$apiOffer["created_at"]}}</td><td>{{$apiOffer["updated_at"]}}</td>
									<td>
										<div class="form-group">
										<a class="btn btn-sm btn-info" href="/api-offer/edit/{{$apiOffer['id']}}">Edit</a>

										 </div>
										<a class="btn btn-sm btn-info" href="/api-offer/destroy/{{$apiOffer['id']}}">Delete</a>
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
