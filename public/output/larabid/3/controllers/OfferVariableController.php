<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OfferVariable;

class OfferVariableController extends Controller
{

    public function index()
    {

    	// get all the OfferVariable
        $offerVariables = OfferVariable::all();
        // load the view and pass the offerVariables
    	 return view('offer-variable.index', compact('offerVariables'));

    }

    public function create()
    {
        // load the create form (app/views/offer-variable/create.blade.php)
        return view('offer-variable.create');
    }

    public function store(Request $request)
    {
        OfferVariable::create($request->all());
	    return redirect()->route('offer-variable.index');
    }


    public function show($id)
    {
         $offerVariables = OfferVariable::findOrFail($id);
    	 return view('offer-variable.show', compact('offerVariables'));

    }

    public function update(Request $request, $id)
    {
        $offerVariables = OfferVariable::findOrFail($id);
        $offerVariables->fill($request->all());
        $offerVariables->save();
        return view('offer-variable.index');

    }

    public function destroy($id)
    {
        OfferVariable::destroy($id);
		return view('offer-variable.index');
    }
}
