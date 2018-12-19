<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApiOfferLog;

class ApiOfferLogController extends Controller
{

    public function index()
    {

    	// get all the ApiOfferLog
        $apiOfferLogs = ApiOfferLog::all();
        // load the view and pass the apiOfferLogs
    	 return view('api-offer-log.index', compact('apiOfferLogs'));

    }

    public function create()
    {
        // load the create form (app/views/api-offer-log/create.blade.php)
        return view('api-offer-log.create');
    }

    public function store(Request $request)
    {
        ApiOfferLog::create($request->all());
	    return redirect()->route('api-offer-log.index');
    }


    public function show($id)
    {
         $apiOfferLogs = ApiOfferLog::findOrFail($id);
    	 return view('api-offer-log.show', compact('apiOfferLogs'));

    }

    public function update(Request $request, $id)
    {
        $apiOfferLogs = ApiOfferLog::findOrFail($id);
        $apiOfferLogs->fill($request->all());
        $apiOfferLogs->save();
        return view('api-offer-log.index');

    }

    public function destroy($id)
    {
        ApiOfferLog::destroy($id);
		return view('api-offer-log.index');
    }
}
