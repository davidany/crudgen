<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApiOffer;

class ApiOfferController extends Controller
{

    public function index()
    {

    	// get all the ApiOffer
        $apiOffers = ApiOffer::all();
        // load the view and pass the apiOffers
    	 return view('api-offer.index', compact('apiOffers'));

    }

    public function create()
    {
        // load the create form (app/views/api-offer/create.blade.php)
        return view('api-offer.create');
    }

    public function store(Request $request)
    {
        ApiOffer::create($request->all());
	    return redirect()->route('api-offer.index');
    }


    public function show($id)
    {
         $apiOffers = ApiOffer::findOrFail($id);
    	 return view('api-offer.show', compact('apiOffers'));

    }

    public function update(Request $request, $id)
    {
        $apiOffers = ApiOffer::findOrFail($id);
        $apiOffers->fill($request->all());
        $apiOffers->save();
        return view('api-offer.index');

    }

    public function destroy($id)
    {
        ApiOffer::destroy($id);
		return view('api-offer.index');
    }
}
