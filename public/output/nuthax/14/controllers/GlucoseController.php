<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Glucose;

class GlucoseController extends Controller
{

    public function index()
    {

    	// get all the Glucose
        $glucoses = Glucose::all();
        // load the view and pass the glucoses
    	 return view('glucose.index', compact('glucoses'));

    }

    public function create()
    {
        // load the create form (app/views/glucose/create.blade.php)
        return view('glucose.create');
    }

    public function store(Request $request)
    {
        Glucose::create($request->all());
	    return redirect()->route('glucose.index');
    }


    public function show($id)
    {
         $glucoses = Glucose::findOrFail($id);
    	 return view('glucose.show', compact('glucoses'));

    }

    public function update(Request $request, $id)
    {
        $glucoses = Glucose::findOrFail($id);
        $glucoses->fill($request->all());
        $glucoses->save();
        return view('glucose.index');

    }

    public function destroy($id)
    {
        Glucose::destroy($id);
		return view('glucose.index');
    }
}
