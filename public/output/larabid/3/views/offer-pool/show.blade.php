@extends('base')

@section('content')
        <form method="post"  class="form-horizontal" action="offer-pool/add">


    <div class="container">

        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
            	<a class="navbar-brand" href="offer-pool/index">Offer Pools Page</a>
			</div>
            <ul class="nav navbar-nav">
                <li>
                    <a href="offer-pool/index">View All Offer Pools</a>
                </li>
                <li>
                    <a href="offer-pool/create">Create Offer Pools</a>
            </ul>
        </nav>

        <h1>Showing {{ $offerPool["id"] }}</h1>

	<div class="jumbotron text-center">
		<p>
	<strong>Id:</strong> {{ $offerPool->id }}<br>
</p><p>
	<strong>Type:</strong> {{ $offerPool->type }}<br>
</p><p>
	<strong>Offer Pool Priority:</strong> {{ $offerPool->offer_pool_priority }}<br>
</p><p>
	<strong>Is Active:</strong> {{ $offerPool->is_active }}<br>
</p><p>
	<strong>Path Id:</strong> {{ $offerPool->path_id }}<br>
</p><p>
	<strong>Has Loop:</strong> {{ $offerPool->has_loop }}<br>
</p><p>
	<strong>Fail Url:</strong> {{ $offerPool->fail_url }}<br>
</p><p>
	<strong>Non Loop Jump Destination:</strong> {{ $offerPool->non_loop_jump_destination }}<br>
</p><p>
	<strong>Non Email Jump Destination:</strong> {{ $offerPool->non_email_jump_destination }}<br>
</p><p>
	<strong>Non Id Jump Destination:</strong> {{ $offerPool->non_id_jump_destination }}<br>
</p><p>
	<strong>Created At:</strong> {{ $offerPool->created_at }}<br>
</p><p>
	<strong>Updated At:</strong> {{ $offerPool->updated_at }}<br>
</p>
	</div>
    </div>
@stop
