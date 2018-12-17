<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

	public function index()
	{

		// get all the Order
		$orders = Order::all();

		// load the view and pass the orders
		return view('order.index', compact('orders'));

	}

	public function create()
	{
		// load the create form (app/views/{{modelNamePluralLowerCase}}/create.blade.php)
		return view('{{modelNamePluralLowerCase}}.create');
	}

	public function store(Request $request)
	{
		Order::create($request->all());

		return redirect()->route('order.index');
	}


	public function show($id)
	{
		$orders = Order::findOrFail($id);

		return view('order.show', compact('orders'));

	}

	public function update(Request $request, $id)
	{
		$orders = Order::findOrFail($id);
		$orders->fill($request->all());
		$orders->save();

		return view('order.index');

	}

	public function destroy($id)
	{
		Order::destroy($id);

		return view('order.index');
	}
}
