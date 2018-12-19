@extends('base')

@section('content')
        <form method="post"  class="form-horizontal" action="visitor/add">


    <div class="container">

        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
            	<a class="navbar-brand" href="visitor/index">Visitors Page</a>
			</div>
            <ul class="nav navbar-nav">
                <li>
                    <a href="visitor/index">View All Visitors</a>
                </li>
                <li>
                    <a href="visitor/create">Create Visitors</a>
            </ul>
        </nav>

        <h1>Showing {{ $visitor["id"] }}</h1>

	<div class="jumbotron text-center">
		<p>
	<strong>Id:</strong> {{ $visitor->id }}<br>
</p><p>
	<strong>Affiliate Cake Id:</strong> {{ $visitor->affiliate_cake_id }}<br>
</p><p>
	<strong>Email:</strong> {{ $visitor->email }}<br>
</p><p>
	<strong>Ip Address:</strong> {{ $visitor->ip_address }}<br>
</p><p>
	<strong>Incoming Url:</strong> {{ $visitor->incoming_url }}<br>
</p><p>
	<strong>Outgoing Url:</strong> {{ $visitor->outgoing_url }}<br>
</p><p>
	<strong>Created At:</strong> {{ $visitor->created_at }}<br>
</p><p>
	<strong>Updated At:</strong> {{ $visitor->updated_at }}<br>
</p>
	</div>
    </div>
@stop
