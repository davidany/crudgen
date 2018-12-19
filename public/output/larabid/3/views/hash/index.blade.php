@extends('base')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Hashes </div>


						<!-- will be used to show any messages -->
						@if (Session::has('message'))
							<div class="alert alert-info">{{ Session::get('message') }}</div>
						@endif

						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<td scope="col">Id</td><td scope="col">Created At</td><td scope="col">Updated At</td>
									<td scope="col">Actions</td>

								</tr>
							</thead>
							<tbody>
								@if ($hashes)
								   @foreach($hashes as $hash)
								<tr>
									<td>{{$hash["id"]}}</td><td>{{$hash["created_at"]}}</td><td>{{$hash["updated_at"]}}</td>
									<td>
										<div class="form-group">
										<a class="btn btn-sm btn-info" href="/hash/edit/{{$hash['id']}}">Edit</a>

										 </div>
										<a class="btn btn-sm btn-info" href="/hash/destroy/{{$hash['id']}}">Delete</a>
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
