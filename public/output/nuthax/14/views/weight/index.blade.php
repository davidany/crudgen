@extends('base')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Weights </div>


						<!-- will be used to show any messages -->
						@if (Session::has('message'))
							<div class="alert alert-info">{{ Session::get('message') }}</div>
						@endif

						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<td scope="col">Id</td><td scope="col">Weight</td><td scope="col">Units</td><td scope="col">User Id</td>
									<td scope="col">Actions</td>

								</tr>
							</thead>
							<tbody>
								@if ($weights)
								   @foreach($weights as $weight)
								<tr>
									<td>{{$weight["id"]}}</td><td>{{$weight["weight"]}}</td><td>{{$weight["units"]}}</td><td>{{$weight["user_id"]}}</td>
									<td>
										<div class="form-group">
										<a class="btn btn-sm btn-info" href="/weight/edit/{{$weight['id']}}">Edit</a>

										 </div>
										<a class="btn btn-sm btn-info" href="/weight/destroy/{{$weight['id']}}">Delete</a>
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
