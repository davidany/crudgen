@extends('base')

@section('content')

    <div class="container">
		<h1>Add Foods </h1>
        <form method="post"  class="form-horizontal" action="food/add">

		<div class="form-group">
	<label class="" for="id">Id</label>
	<input type="text" class="form-control" name="id"  value="" id="id">
</div>

<div class="form-group">
	<label class="" for="name">Name</label>
	<input type="text" class="form-control" name="name"  value="" id="name">
</div>

<div class="form-group">
	<label class="" for="calories">Calories</label>
	<input type="text" class="form-control" name="calories"  value="" id="calories">
</div>

<div class="form-group">
	<label class="" for="total_fat">Total Fat</label>
	<input type="text" class="form-control" name="total_fat"  value="" id="total_fat">
</div>

<div class="form-group">
	<label class="" for="saturated_fat">Saturated Fat</label>
	<input type="text" class="form-control" name="saturated_fat"  value="" id="saturated_fat">
</div>

<div class="form-group">
	<label class="" for="polyunsaturated_fat">Polyunsaturated Fat</label>
	<input type="text" class="form-control" name="polyunsaturated_fat"  value="" id="polyunsaturated_fat">
</div>

<div class="form-group">
	<label class="" for="monounsaturated_fat">Monounsaturated Fat</label>
	<input type="text" class="form-control" name="monounsaturated_fat"  value="" id="monounsaturated_fat">
</div>

<div class="form-group">
	<label class="" for="trans_fat">Trans Fat</label>
	<input type="text" class="form-control" name="trans_fat"  value="" id="trans_fat">
</div>

<div class="form-group">
	<label class="" for="sodium">Sodium</label>
	<input type="text" class="form-control" name="sodium"  value="" id="sodium">
</div>

<div class="form-group">
	<label class="" for="potassium">Potassium</label>
	<input type="text" class="form-control" name="potassium"  value="" id="potassium">
</div>

<div class="form-group">
	<label class="" for="total_carbs">Total Carbs</label>
	<input type="text" class="form-control" name="total_carbs"  value="" id="total_carbs">
</div>

<div class="form-group">
	<label class="" for="dietary_fiber">Dietary Fiber</label>
	<input type="text" class="form-control" name="dietary_fiber"  value="" id="dietary_fiber">
</div>

<div class="form-group">
	<label class="" for="sugars">Sugars</label>
	<input type="text" class="form-control" name="sugars"  value="" id="sugars">
</div>

<div class="form-group">
	<label class="" for="protein">Protein</label>
	<input type="text" class="form-control" name="protein"  value="" id="protein">
</div>

<div class="form-group">
	<label class="" for="cholesterol">Cholesterol</label>
	<input type="text" class="form-control" name="cholesterol"  value="" id="cholesterol">
</div>

<div class="form-group">
	<label class="" for="vitamin_a">Vitamin A</label>
	<input type="text" class="form-control" name="vitamin_a"  value="" id="vitamin_a">
</div>

<div class="form-group">
	<label class="" for="vitamin_c">Vitamin C</label>
	<input type="text" class="form-control" name="vitamin_c"  value="" id="vitamin_c">
</div>

<div class="form-group">
	<label class="" for="calcium">Calcium</label>
	<input type="text" class="form-control" name="calcium"  value="" id="calcium">
</div>

<div class="form-group">
	<label class="" for="iron">Iron</label>
	<input type="text" class="form-control" name="iron"  value="" id="iron">
</div>

<div class="form-group">
	<label class="" for="recorded_time">Recorded Time</label>
	<input type="text" class="form-control" name="recorded_time"  value="" id="recorded_time">
</div>

<div class="form-group">
	<label class="" for="sugar_alcohols">Sugar Alcohols</label>
	<input type="text" class="form-control" name="sugar_alcohols"  value="" id="sugar_alcohols">
</div>

<div class="form-group">
	<label class="" for="user_id">User Id</label>
	<input type="text" class="form-control" name="user_id"  value="" id="user_id">
</div>



	   <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Save Foods	</button>
			</div>
		</div>
		</form>
	</div>
@stop