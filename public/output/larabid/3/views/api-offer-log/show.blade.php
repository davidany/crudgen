@extends('base')

@section('content')
        <form method="post"  class="form-horizontal" action="api-offer-log/add">


    <div class="container">

        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
            	<a class="navbar-brand" href="api-offer-log/index">Api Offer Logs Page</a>
			</div>
            <ul class="nav navbar-nav">
                <li>
                    <a href="api-offer-log/index">View All Api Offer Logs</a>
                </li>
                <li>
                    <a href="api-offer-log/create">Create Api Offer Logs</a>
            </ul>
        </nav>

        <h1>Showing {{ $apiOfferLog["id"] }}</h1>

	<div class="jumbotron text-center">
		<p>
	<strong>Id:</strong> {{ $apiOfferLog->id }}<br>
</p><p>
	<strong>Api Success:</strong> {{ $apiOfferLog->api_success }}<br>
</p><p>
	<strong>Network:</strong> {{ $apiOfferLog->network }}<br>
</p><p>
	<strong>Var1:</strong> {{ $apiOfferLog->var1 }}<br>
</p><p>
	<strong>Var2:</strong> {{ $apiOfferLog->var2 }}<br>
</p><p>
	<strong>Var3:</strong> {{ $apiOfferLog->var3 }}<br>
</p><p>
	<strong>Cid:</strong> {{ $apiOfferLog->cid }}<br>
</p><p>
	<strong>Cid2:</strong> {{ $apiOfferLog->cid2 }}<br>
</p><p>
	<strong>Cid3:</strong> {{ $apiOfferLog->cid3 }}<br>
</p><p>
	<strong>Posted Url:</strong> {{ $apiOfferLog->posted_url }}<br>
</p><p>
	<strong>Error Code:</strong> {{ $apiOfferLog->error_code }}<br>
</p><p>
	<strong>Error Description:</strong> {{ $apiOfferLog->error_description }}<br>
</p><p>
	<strong>Visitor Id:</strong> {{ $apiOfferLog->visitor_id }}<br>
</p><p>
	<strong>Api Offer Id:</strong> {{ $apiOfferLog->api_offer_id }}<br>
</p><p>
	<strong>Created At:</strong> {{ $apiOfferLog->created_at }}<br>
</p><p>
	<strong>Updated At:</strong> {{ $apiOfferLog->updated_at }}<br>
</p>
	</div>
    </div>
@stop
