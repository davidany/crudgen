<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QueryVariable;

class QueryVariableController extends Controller
{

    public function index()
    {

    	// get all the QueryVariable
        $queryVariables = QueryVariable::all();
        // load the view and pass the queryVariables
    	 return view('query-variable.index', compact('queryVariables'));

    }

    public function create()
    {
        // load the create form (app/views/{{modelNamePluralLowerCase}}/create.blade.php)
        return view('{{modelNamePluralLowerCase}}.create');
    }

    public function store(Request $request)
    {
        QueryVariable::create($request->all());
	    return redirect()->route('query-variable.index');
    }


    public function show($id)
    {
         $queryVariables = QueryVariable::findOrFail($id);
    	 return view('query-variable.show', compact('queryVariables'));

    }

    public function update(Request $request, $id)
    {
        $queryVariables = QueryVariable::findOrFail($id);
        $queryVariables->fill($request->all());
        $queryVariables->save();
        return view('query-variable.index');

    }

    public function destroy($id)
    {
        QueryVariable::destroy($id);
		return view('query-variable.index');
    }
}
