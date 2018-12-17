<?php

namespace App\Http\Controllers;

use App\OfferPool;
use Illuminate\Http\Request;

class OfferPoolController extends Controller
{

	public function index()
	{

		// get all the OfferPool
		$offerPools = OfferPool::all();

		// load the view and pass the offerPools
		return view('offer-pool.index', compact('offerPools'));

	}

	public function create()
	{
		// load the create form (app/views/{{modelNamePluralLowerCase}}/create.blade.php)
		return view('{{modelNamePluralLowerCase}}.create');
	}

	public function store(Request $request)
	{
		OfferPool::create($request->all());

		return redirect()->route('offer-pool.index');
	}


	public function show($id)
	{
		$offerPools = OfferPool::findOrFail($id);

		return view('offer-pool.show', compact('offerPools'));

	}

	public function update(Request $request, $id)
	{
		$offerPools = OfferPool::findOrFail($id);
		$offerPools->fill($request->all());
		$offerPools->save();

		return view('offer-pool.index');

	}

	public function destroy($id)
	{
		OfferPool::destroy($id);

		return view('offer-pool.index');
	}
}
