<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{

	public function index()
	{

		// get all the Offer
		$offers = Offer::all();

		// load the view and pass the offers
		return view('offer.index', compact('offers'));

	}

	public function create()
	{
		// load the create form (app/views/{{modelNamePluralLowerCase}}/create.blade.php)
		return view('{{modelNamePluralLowerCase}}.create');
	}

	public function store(Request $request)
	{
		Offer::create($request->all());

		return redirect()->route('offer.index');
	}


	public function show($id)
	{
		$offers = Offer::findOrFail($id);

		return view('offer.show', compact('offers'));

	}

	public function update(Request $request, $id)
	{
		$offers = Offer::findOrFail($id);
		$offers->fill($request->all());
		$offers->save();

		return view('offer.index');

	}

	public function destroy($id)
	{
		Offer::destroy($id);

		return view('offer.index');
	}
}
