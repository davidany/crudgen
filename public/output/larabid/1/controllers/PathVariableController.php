<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PathVariable;

class PathVariableController extends Controller
{

    public function index()
    {

    	// get all the PathVariable
        $pathVariables = PathVariable::all();
        // load the view and pass the pathVariables
    	 return view('path-variable.index', compact('pathVariables'));

    }

    public function create()
    {
        // load the create form (app/views/{{modelNamePluralLowerCase}}/create.blade.php)
        return view('{{modelNamePluralLowerCase}}.create');
    }

    public function store(Request $request)
    {
        PathVariable::create($request->all());
	    return redirect()->route('path-variable.index');
    }


    public function show($id)
    {
         $pathVariables = PathVariable::findOrFail($id);
    	 return view('path-variable.show', compact('pathVariables'));

    }

    public function update(Request $request, $id)
    {
        $pathVariables = PathVariable::findOrFail($id);
        $pathVariables->fill($request->all());
        $pathVariables->save();
        return view('path-variable.index');

    }

    public function destroy($id)
    {
        PathVariable::destroy($id);
		return view('path-variable.index');
    }
}
