@extends('base')

@section('content')
        <form method="post"  class="form-horizontal" action="food/add">


    <div class="container">

        <nav class="navbar navbar-inverse">
            <div class="navbar-header">
            	<a class="navbar-brand" href="food/index">Foods Page</a>
			</div>
            <ul class="nav navbar-nav">
                <li>
                    <a href="food/index">View All Foods</a>
                </li>
                <li>
                    <a href="food/create">Create Foods</a>
            </ul>
        </nav>

        <h1>Showing {{ $food["id"] }}</h1>

	<div class="jumbotron text-center">
		<p>
	<strong>Id:</strong> {{ $food->id }}<br>
</p><p>
	<strong>Name:</strong> {{ $food->name }}<br>
</p><p>
	<strong>Calories:</strong> {{ $food->calories }}<br>
</p><p>
	<strong>Total Fat:</strong> {{ $food->total_fat }}<br>
</p><p>
	<strong>Saturated Fat:</strong> {{ $food->saturated_fat }}<br>
</p><p>
	<strong>Polyunsaturated Fat:</strong> {{ $food->polyunsaturated_fat }}<br>
</p><p>
	<strong>Monounsaturated Fat:</strong> {{ $food->monounsaturated_fat }}<br>
</p><p>
	<strong>Trans Fat:</strong> {{ $food->trans_fat }}<br>
</p><p>
	<strong>Sodium:</strong> {{ $food->sodium }}<br>
</p><p>
	<strong>Potassium:</strong> {{ $food->potassium }}<br>
</p><p>
	<strong>Total Carbs:</strong> {{ $food->total_carbs }}<br>
</p><p>
	<strong>Dietary Fiber:</strong> {{ $food->dietary_fiber }}<br>
</p><p>
	<strong>Sugars:</strong> {{ $food->sugars }}<br>
</p><p>
	<strong>Protein:</strong> {{ $food->protein }}<br>
</p><p>
	<strong>Cholesterol:</strong> {{ $food->cholesterol }}<br>
</p><p>
	<strong>Vitamin A:</strong> {{ $food->vitamin_a }}<br>
</p><p>
	<strong>Vitamin C:</strong> {{ $food->vitamin_c }}<br>
</p><p>
	<strong>Calcium:</strong> {{ $food->calcium }}<br>
</p><p>
	<strong>Iron:</strong> {{ $food->iron }}<br>
</p><p>
	<strong>Recorded Time:</strong> {{ $food->recorded_time }}<br>
</p><p>
	<strong>Sugar Alcohols:</strong> {{ $food->sugar_alcohols }}<br>
</p><p>
	<strong>User Id:</strong> {{ $food->user_id }}<br>
</p>
	</div>
    </div>
@stop
