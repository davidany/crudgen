@extends('base')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Relationship </div>


						<!-- will be used to show any messages -->
						@if (Session::has('message'))
							<div class="alert alert-info">{{ Session::get('message') }}</div>
						@endif

						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<td scope="col">Id</td><td scope="col">First Table</td><td scope="col">Relationship Type</td><td scope="col">Related Table</td><td scope="col">Project Id</td>
									<td scope="col">Actions</td>

								</tr>
							</thead>
							<tbody>
								@if ($relationship)
								   @foreach($relationship as $relationship)
								<tr>
									<td>{{$relationship["id"]}}</td><td>{{$relationship["first_table"]}}</td><td>{{$relationship["relationship_type"]}}</td><td>{{$relationship["related_table"]}}</td><td>{{$relationship["project_id"]}}</td>
									<td>
										<div class="form-group">
										<a class="btn btn-sm btn-info" href="/relationship/edit/{{$relationship['id']}}">Edit</a>

										 </div>
										<a class="btn btn-sm btn-info" href="/relationship/destroy/{{$relationship['id']}}">Delete</a>
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
