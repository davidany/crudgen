<?php

namespace App\Http\Controllers;

use App\AffiliateOfferPool;
use Illuminate\Http\Request;

class AffiliateOfferPoolController extends Controller
{

	public function index()
	{

		// get all the AffiliateOfferPool
		$affiliateOfferPool = AffiliateOfferPool::all();

		// load the view and pass the affiliateOfferPool
		return view('affiliate-offer-pool.index', compact('affiliateOfferPool'));

	}

	public function create()
	{
		// load the create form (app/views/{{modelNamePluralLowerCase}}/create.blade.php)
		return view('{{modelNamePluralLowerCase}}.create');
	}

	public function store(Request $request)
	{
		AffiliateOfferPool::create($request->all());

		return redirect()->route('affiliate-offer-pool.index');
	}


	public function show($id)
	{
		$affiliateOfferPool = AffiliateOfferPool::findOrFail($id);

		return view('affiliate-offer-pool.show', compact('affiliateOfferPool'));

	}

	public function update(Request $request, $id)
	{
		$affiliateOfferPool = AffiliateOfferPool::findOrFail($id);
		$affiliateOfferPool->fill($request->all());
		$affiliateOfferPool->save();

		return view('affiliate-offer-pool.index');

	}

	public function destroy($id)
	{
		AffiliateOfferPool::destroy($id);

		return view('affiliate-offer-pool.index');
	}
}
