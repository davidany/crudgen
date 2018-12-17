<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Affiliate;

class AffiliateController extends Controller
{

    public function index()
    {

    	// get all the Affiliate
        $affiliates = Affiliate::all();
        // load the view and pass the affiliates
    	 return view('affiliate.index', compact('affiliates'));

    }

    public function create()
    {
        // load the create form (app/views/{{modelNamePluralLowerCase}}/create.blade.php)
        return view('{{modelNamePluralLowerCase}}.create');
    }

    public function store(Request $request)
    {
        Affiliate::create($request->all());
	    return redirect()->route('affiliate.index');
    }


    public function show($id)
    {
         $affiliates = Affiliate::findOrFail($id);
    	 return view('affiliate.show', compact('affiliates'));

    }

    public function update(Request $request, $id)
    {
        $affiliates = Affiliate::findOrFail($id);
        $affiliates->fill($request->all());
        $affiliates->save();
        return view('affiliate.index');

    }

    public function destroy($id)
    {
        Affiliate::destroy($id);
		return view('affiliate.index');
    }
}
