@extends('base')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Db Credential </div>


						<!-- will be used to show any messages -->
						@if (Session::has('message'))
							<div class="alert alert-info">{{ Session::get('message') }}</div>
						@endif

						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<td scope="col">Id</td><td scope="col">Host</td><td scope="col">Database</td><td scope="col">Username</td><td scope="col">Password</td><td scope="col">Project Id</td>
									<td scope="col">Actions</td>

								</tr>
							</thead>
							<tbody>
								@if ($dbCredential)
								   @foreach($dbCredential as $dbCredential)
								<tr>
									<td>{{$dbCredential["id"]}}</td><td>{{$dbCredential["host"]}}</td><td>{{$dbCredential["database"]}}</td><td>{{$dbCredential["username"]}}</td><td>{{$dbCredential["password"]}}</td><td>{{$dbCredential["project_id"]}}</td>
									<td>
										<div class="form-group">
										<a class="btn btn-sm btn-info" href="/db-credential/edit/{{$dbCredential['id']}}">Edit</a>

										 </div>
										<a class="btn btn-sm btn-info" href="/db-credential/destroy/{{$dbCredential['id']}}">Delete</a>
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
