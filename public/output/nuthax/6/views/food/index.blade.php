@extends('base')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Foods </div>


						<!-- will be used to show any messages -->
						@if (Session::has('message'))
							<div class="alert alert-info">{{ Session::get('message') }}</div>
						@endif

						<table class="table table-striped table-bordered">
							<thead>
								<tr>
									<td scope="col">Id</td><td scope="col">Name</td><td scope="col">Calories</td><td scope="col">Total Fat</td><td scope="col">Saturated Fat</td><td scope="col">Polyunsaturated Fat</td><td scope="col">Monounsaturated Fat</td><td scope="col">Trans Fat</td><td scope="col">Sodium</td><td scope="col">Potassium</td><td scope="col">Total Carbs</td><td scope="col">Dietary Fiber</td><td scope="col">Sugars</td><td scope="col">Protein</td><td scope="col">Cholesterol</td><td scope="col">Vitamin A</td><td scope="col">Vitamin C</td><td scope="col">Calcium</td><td scope="col">Iron</td><td scope="col">Recorded Time</td><td scope="col">Sugar Alcohols</td><td scope="col">User Id</td>
									<td scope="col">Actions</td>

								</tr>
							</thead>
							<tbody>
								@if ($foods)
								   @foreach($foods as $food)
								<tr>
									<td>{{$food["id"]}}</td><td>{{$food["name"]}}</td><td>{{$food["calories"]}}</td><td>{{$food["total_fat"]}}</td><td>{{$food["saturated_fat"]}}</td><td>{{$food["polyunsaturated_fat"]}}</td><td>{{$food["monounsaturated_fat"]}}</td><td>{{$food["trans_fat"]}}</td><td>{{$food["sodium"]}}</td><td>{{$food["potassium"]}}</td><td>{{$food["total_carbs"]}}</td><td>{{$food["dietary_fiber"]}}</td><td>{{$food["sugars"]}}</td><td>{{$food["protein"]}}</td><td>{{$food["cholesterol"]}}</td><td>{{$food["vitamin_a"]}}</td><td>{{$food["vitamin_c"]}}</td><td>{{$food["calcium"]}}</td><td>{{$food["iron"]}}</td><td>{{$food["recorded_time"]}}</td><td>{{$food["sugar_alcohols"]}}</td><td>{{$food["user_id"]}}</td>
									<td>
										<div class="form-group">
										<a class="btn btn-sm btn-info" href="/food/edit/{{$food['id']}}">Edit</a>

										 </div>
										<a class="btn btn-sm btn-info" href="/food/destroy/{{$food['id']}}">Delete</a>
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
