<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OfferLog;

class OfferLogController extends Controller
{

    public function index()
    {

    	// get all the OfferLog
        $offerLogs = OfferLog::all();
        // load the view and pass the offerLogs
    	 return view('offer-log.index', compact('offerLogs'));

    }

    public function create()
    {
        // load the create form (app/views/offer-log/create.blade.php)
        return view('offer-log.create');
    }

    public function store(Request $request)
    {
        OfferLog::create($request->all());
	    return redirect()->route('offer-log.index');
    }


    public function show($id)
    {
         $offerLogs = OfferLog::findOrFail($id);
    	 return view('offer-log.show', compact('offerLogs'));

    }

    public function update(Request $request, $id)
    {
        $offerLogs = OfferLog::findOrFail($id);
        $offerLogs->fill($request->all());
        $offerLogs->save();
        return view('offer-log.index');

    }

    public function destroy($id)
    {
        OfferLog::destroy($id);
		return view('offer-log.index');
    }
}
