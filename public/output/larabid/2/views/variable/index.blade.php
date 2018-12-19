@extends('base')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Variables </div>


						<!-- will be used to show any messages -->
						@if (Session::has('message'))
							<div class="alert alert-info">{{ Session::get('message') }}</div>
						@endif

						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<td scope="col">Id</td>
									<td scope="col">Actions</td>

								</tr>
							</thead>
							<tbody>
								@if ($variables)
								   @foreach($variables as $variable)
								<tr>
									<td>{{$variable["id"]}}</td>
									<td>
										<div class="form-group">
										<a class="btn btn-sm btn-info" href="/variable/edit/{{$variable['id']}}">Edit</a>

										 </div>
										<a class="btn btn-sm btn-info" href="/variable/destroy/{{$variable['id']}}">Delete</a>
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
