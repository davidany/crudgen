@extends('base')

@section('content')
        <form method="post"  class="form-horizontal" action="affiliate-offer-pool/add">


    <div class="container">

        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
            	<a class="navbar-brand" href="affiliate-offer-pool/index">Affiliate Offer Pool Page</a>
			</div>
            <ul class="nav navbar-nav">
                <li>
                    <a href="affiliate-offer-pool/index">View All Affiliate Offer Pool</a>
                </li>
                <li>
                    <a href="affiliate-offer-pool/create">Create Affiliate Offer Pool</a>
            </ul>
        </nav>

        <h1>Showing {{ $affiliateOfferPool["id"] }}</h1>

	<div class="jumbotron text-center">
		<p>
	<strong>Id:</strong> {{ $affiliateOfferPool->id }}<br>
</p><p>
	<strong>Affiliate Id:</strong> {{ $affiliateOfferPool->affiliate_id }}<br>
</p><p>
	<strong>Offer Pool Id:</strong> {{ $affiliateOfferPool->offer_pool_id }}<br>
</p><p>
	<strong>Created At:</strong> {{ $affiliateOfferPool->created_at }}<br>
</p><p>
	<strong>Updated At:</strong> {{ $affiliateOfferPool->updated_at }}<br>
</p>
	</div>
    </div>
@stop
