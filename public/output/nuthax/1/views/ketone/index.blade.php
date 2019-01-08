@extends('base')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ketones </div>


						<!-- will be used to show any messages -->
						@if (Session::has('message'))
							<div class="alert alert-info">{{ Session::get('message') }}</div>
						@endif

						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<td scope="col">Id</td><td scope="col">Level</td><td scope="col">Units</td><td scope="col">User Id</td>
									<td scope="col">Actions</td>

								</tr>
							</thead>
							<tbody>
								@if ($ketones)
								   @foreach($ketones as $ketone)
								<tr>
									<td>{{$ketone["id"]}}</td><td>{{$ketone["level"]}}</td><td>{{$ketone["units"]}}</td><td>{{$ketone["user_id"]}}</td>
									<td>
										<div class="form-group">
										<a class="btn btn-sm btn-info" href="/ketone/edit/{{$ketone['id']}}">Edit</a>

										 </div>
										<a class="btn btn-sm btn-info" href="/ketone/destroy/{{$ketone['id']}}">Delete</a>
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
