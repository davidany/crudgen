@extends('base')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Check Levels </div>


						<!-- will be used to show any messages -->
						@if (Session::has('message'))
							<div class="alert alert-info">{{ Session::get('message') }}</div>
						@endif

						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<td scope="col">Id</td><td scope="col">Tinytiny</td><td scope="col">Decdec</td><td scope="col">Timetime</td><td scope="col">Datedatetime</td><td scope="col">Texttext</td><td scope="col">Boolbool</td><td scope="col">Enumenum</td><td scope="col">Stringstring</td>
									<td scope="col">Actions</td>

								</tr>
							</thead>
							<tbody>
								@if ($checkLevels)
								   @foreach($checkLevels as $checkLevel)
								<tr>
									<td>{{$checkLevel["id"]}}</td><td>{{$checkLevel["tinytiny"]}}</td><td>{{$checkLevel["decdec"]}}</td><td>{{$checkLevel["timetime"]}}</td><td>{{$checkLevel["datedatetime"]}}</td><td>{{$checkLevel["texttext"]}}</td><td>{{$checkLevel["boolbool"]}}</td><td>{{$checkLevel["enumenum"]}}</td><td>{{$checkLevel["stringstring"]}}</td>
									<td>
										<div class="form-group">
										<a class="btn btn-sm btn-info" href="/check-level/edit/{{$checkLevel['id']}}">Edit</a>

										 </div>
										<a class="btn btn-sm btn-info" href="/check-level/destroy/{{$checkLevel['id']}}">Delete</a>
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
