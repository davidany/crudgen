@extends('base')

@section('content')

    <div class="container">
		<h1>Edit Foods </h1>
        <form method="post"  class="form-horizontal" action="food/update">

		<div class="form-group">
	<label class="" for="id">Id</label>
	<input type="text" class="form-control" name="id" value="{{ $food->id }}" id="id">
</div>
<div class="form-group">
	<label class="" for="name">Name</label>
	<input type="text" class="form-control" name="name" value="{{ $food->name }}" id="name">
</div>
<div class="form-group">
	<label class="" for="calories">Calories</label>
	<input type="text" class="form-control" name="calories" value="{{ $food->calories }}" id="calories">
</div>
<div class="form-group">
	<label class="" for="total_fat">Total Fat</label>
	<input type="text" class="form-control" name="total_fat" value="{{ $food->total_fat }}" id="total_fat">
</div>
<div class="form-group">
	<label class="" for="saturated_fat">Saturated Fat</label>
	<input type="text" class="form-control" name="saturated_fat" value="{{ $food->saturated_fat }}" id="saturated_fat">
</div>
<div class="form-group">
	<label class="" for="polyunsaturated_fat">Polyunsaturated Fat</label>
	<input type="text" class="form-control" name="polyunsaturated_fat" value="{{ $food->polyunsaturated_fat }}" id="polyunsaturated_fat">
</div>
<div class="form-group">
	<label class="" for="monounsaturated_fat">Monounsaturated Fat</label>
	<input type="text" class="form-control" name="monounsaturated_fat" value="{{ $food->monounsaturated_fat }}" id="monounsaturated_fat">
</div>
<div class="form-group">
	<label class="" for="trans_fat">Trans Fat</label>
	<input type="text" class="form-control" name="trans_fat" value="{{ $food->trans_fat }}" id="trans_fat">
</div>
<div class="form-group">
	<label class="" for="sodium">Sodium</label>
	<input type="text" class="form-control" name="sodium" value="{{ $food->sodium }}" id="sodium">
</div>
<div class="form-group">
	<label class="" for="potassium">Potassium</label>
	<input type="text" class="form-control" name="potassium" value="{{ $food->potassium }}" id="potassium">
</div>
<div class="form-group">
	<label class="" for="total_carbs">Total Carbs</label>
	<input type="text" class="form-control" name="total_carbs" value="{{ $food->total_carbs }}" id="total_carbs">
</div>
<div class="form-group">
	<label class="" for="dietary_fiber">Dietary Fiber</label>
	<input type="text" class="form-control" name="dietary_fiber" value="{{ $food->dietary_fiber }}" id="dietary_fiber">
</div>
<div class="form-group">
	<label class="" for="sugars">Sugars</label>
	<input type="text" class="form-control" name="sugars" value="{{ $food->sugars }}" id="sugars">
</div>
<div class="form-group">
	<label class="" for="protein">Protein</label>
	<input type="text" class="form-control" name="protein" value="{{ $food->protein }}" id="protein">
</div>
<div class="form-group">
	<label class="" for="cholesterol">Cholesterol</label>
	<input type="text" class="form-control" name="cholesterol" value="{{ $food->cholesterol }}" id="cholesterol">
</div>
<div class="form-group">
	<label class="" for="vitamin_a">Vitamin A</label>
	<input type="text" class="form-control" name="vitamin_a" value="{{ $food->vitamin_a }}" id="vitamin_a">
</div>
<div class="form-group">
	<label class="" for="vitamin_c">Vitamin C</label>
	<input type="text" class="form-control" name="vitamin_c" value="{{ $food->vitamin_c }}" id="vitamin_c">
</div>
<div class="form-group">
	<label class="" for="calcium">Calcium</label>
	<input type="text" class="form-control" name="calcium" value="{{ $food->calcium }}" id="calcium">
</div>
<div class="form-group">
	<label class="" for="iron">Iron</label>
	<input type="text" class="form-control" name="iron" value="{{ $food->iron }}" id="iron">
</div>
<div class="form-group">
	<label class="" for="recorded_time">Recorded Time</label>
	<input type="text" class="form-control" name="recorded_time" value="{{ $food->recorded_time }}" id="recorded_time">
</div>
<div class="form-group">
	<label class="" for="sugar_alcohols">Sugar Alcohols</label>
	<input type="text" class="form-control" name="sugar_alcohols" value="{{ $food->sugar_alcohols }}" id="sugar_alcohols">
</div>
<div class="form-group">
	<label class="" for="user_id">User Id</label>
	<input type="text" class="form-control" name="user_id" value="{{ $food->user_id }}" id="user_id">
</div>


	   <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Save Foods	</button>
			</div>
		</div>
		</form>
	</div>
@stop