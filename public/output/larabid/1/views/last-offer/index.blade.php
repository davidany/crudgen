@extends('base')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Last Offers </div>


						<!-- will be used to show any messages -->
						@if (Session::has('message'))
							<div class="alert alert-info">{{ Session::get('message') }}</div>
						@endif

						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<td scope="col">Id</td><td scope="col">Path Id</td><td scope="col">Offer Pool Id</td><td scope="col">Offer Id</td><td scope="col">Email</td><td scope="col">Ip Address</td><td scope="col">Created At</td><td scope="col">Updated At</td>
									<td scope="col">Actions</td>

								</tr>
							</thead>
							<tbody>
								@if ($lastOffers)
								   @foreach($lastOffers as $lastOffer)
								<tr>
									<td>{{$lastOffer["id"]}}</td><td>{{$lastOffer["path_id"]}}</td><td>{{$lastOffer["offer_pool_id"]}}</td><td>{{$lastOffer["offer_id"]}}</td><td>{{$lastOffer["email"]}}</td><td>{{$lastOffer["ip_address"]}}</td><td>{{$lastOffer["created_at"]}}</td><td>{{$lastOffer["updated_at"]}}</td>
									<td>
										<div class="form-group">
										<a class="btn btn-sm btn-info" href="/last-offer/{{$lastOffer['id']}}">Edit</a>

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
