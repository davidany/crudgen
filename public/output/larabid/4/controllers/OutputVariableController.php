<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OutputVariable;

class OutputVariableController extends Controller
{

    public function index()
    {

    	// get all the OutputVariable
        $outputVariables = OutputVariable::all();
        // load the view and pass the outputVariables
    	 return view('output-variable.index', compact('outputVariables'));

    }

    public function create()
    {
        // load the create form (app/views/output-variable/create.blade.php)
        return view('output-variable.create');
    }

    public function store(Request $request)
    {
        OutputVariable::create($request->all());
	    return redirect()->route('output-variable.index');
    }


    public function show($id)
    {
         $outputVariables = OutputVariable::findOrFail($id);
    	 return view('output-variable.show', compact('outputVariables'));

    }

    public function update(Request $request, $id)
    {
        $outputVariables = OutputVariable::findOrFail($id);
        $outputVariables->fill($request->all());
        $outputVariables->save();
        return view('output-variable.index');

    }

    public function destroy($id)
    {
        OutputVariable::destroy($id);
		return view('output-variable.index');
    }
}
