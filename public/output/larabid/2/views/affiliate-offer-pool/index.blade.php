@extends('base')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Affiliate Offer Pool </div>


						<!-- will be used to show any messages -->
						@if (Session::has('message'))
							<div class="alert alert-info">{{ Session::get('message') }}</div>
						@endif

						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<td scope="col">Id</td><td scope="col">Affiliate Id</td><td scope="col">Offer Pool Id</td><td scope="col">Created At</td><td scope="col">Updated At</td>
									<td scope="col">Actions</td>

								</tr>
							</thead>
							<tbody>
								@if ($affiliateOfferPool)
								   @foreach($affiliateOfferPool as $affiliateOfferPool)
								<tr>
									<td>{{$affiliateOfferPool["id"]}}</td><td>{{$affiliateOfferPool["affiliate_id"]}}</td><td>{{$affiliateOfferPool["offer_pool_id"]}}</td><td>{{$affiliateOfferPool["created_at"]}}</td><td>{{$affiliateOfferPool["updated_at"]}}</td>
									<td>
										<div class="form-group">
										<a class="btn btn-sm btn-info" href="/affiliate-offer-pool/edit/{{$affiliateOfferPool['id']}}">Edit</a>

										 </div>
										<a class="btn btn-sm btn-info" href="/affiliate-offer-pool/destroy/{{$affiliateOfferPool['id']}}">Delete</a>
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