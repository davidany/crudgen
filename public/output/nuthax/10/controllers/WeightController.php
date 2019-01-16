<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Weight;

class WeightController extends Controller
{

    public function index()
    {

    	// get all the Weight
        $weights = Weight::all();
        // load the view and pass the weights
    	 return view('weight.index', compact('weights'));

    }

    public function create()
    {
        // load the create form (app/views/weight/create.blade.php)
        return view('weight.create');
    }

    public function store(Request $request)
    {
        Weight::create($request->all());
	    return redirect()->route('weight.index');
    }


    public function show($id)
    {
         $weights = Weight::findOrFail($id);
    	 return view('weight.show', compact('weights'));

    }

    public function update(Request $request, $id)
    {
        $weights = Weight::findOrFail($id);
        $weights->fill($request->all());
        $weights->save();
        return view('weight.index');

    }

    public function destroy($id)
    {
        Weight::destroy($id);
		return view('weight.index');
    }
}
