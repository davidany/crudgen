@extends('base')

@section('content')

    <div class="container">
		<h1>Add Check Levels </h1>
        <form method="post"  class="form-horizontal" action="check-level/add">

		<div class="form-group">
	<label class="" for="id">Id</label>
	<input type="text" class="form-control" name="id"  value="" id="id">
</div>

<div class="form-group">
	<label class="" for="tinytiny">Tinytiny</label>
	<input type="text" class="form-control" name="tinytiny"  value="" id="tinytiny">
</div>

<div class="form-group">
	<label class="" for="decdec">Decdec</label>
	<input type="text" class="form-control" name="decdec"  value="" id="decdec">
</div>

<div class="form-group">
	<label class="" for="timetime">Timetime</label>
	<input type="text" class="form-control" name="timetime"  value="" id="timetime">
</div>

<div class="form-group">
	<label class="" for="datedatetime">Datedatetime</label>
	<input type="text" class="form-control" name="datedatetime"  value="" id="datedatetime">
</div>

<div class="form-group">
	<label class="" for="texttext">Texttext</label>
	<input type="text" class="form-control" name="texttext"  value="" id="texttext">
</div>

<div class="form-group">
	<label class="" for="boolbool">Boolbool</label>
	<input type="text" class="form-control" name="boolbool"  value="" id="boolbool">
</div>

<div class="form-group">
	<label class="" for="enumenum">Enumenum</label>
	<input type="text" class="form-control" name="enumenum"  value="" id="enumenum">
</div>

<div class="form-group">
	<label class="" for="stringstring">Stringstring</label>
	<input type="text" class="form-control" name="stringstring"  value="" id="stringstring">
</div>



	   <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Save Check Levels	</button>
			</div>
		</div>
		</form>
	</div>
@stop