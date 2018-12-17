<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LastOffer;

class LastOfferController extends Controller
{

    public function index()
    {

    	// get all the LastOffer
        $lastOffers = LastOffer::all();
        // load the view and pass the lastOffers
    	 return view('last-offer.index', compact('lastOffers'));

    }

    public function create()
    {
        // load the create form (app/views/{{modelNamePluralLowerCase}}/create.blade.php)
        return view('{{modelNamePluralLowerCase}}.create');
    }

    public function store(Request $request)
    {
        LastOffer::create($request->all());
	    return redirect()->route('last-offer.index');
    }


    public function show($id)
    {
         $lastOffers = LastOffer::findOrFail($id);
    	 return view('last-offer.show', compact('lastOffers'));

    }

    public function update(Request $request, $id)
    {
        $lastOffers = LastOffer::findOrFail($id);
        $lastOffers->fill($request->all());
        $lastOffers->save();
        return view('last-offer.index');

    }

    public function destroy($id)
    {
        LastOffer::destroy($id);
		return view('last-offer.index');
    }
}
