<?php

namespace App\Http\Controllers;

use App\VisitorVariable;
use Illuminate\Http\Request;

class VisitorVariableController extends Controller
{

	public function index()
	{

		// get all the VisitorVariable
		$visitorVariables = VisitorVariable::all();

		// load the view and pass the visitorVariables
		return view('visitor-variable.index', compact('visitorVariables'));

	}

	public function create()
	{
		// load the create form (app/views/{{modelNamePluralLowerCase}}/create.blade.php)
		return view('{{modelNamePluralLowerCase}}.create');
	}

	public function store(Request $request)
	{
		VisitorVariable::create($request->all());

		return redirect()->route('visitor-variable.index');
	}


	public function show($id)
	{
		$visitorVariables = VisitorVariable::findOrFail($id);

		return view('visitor-variable.show', compact('visitorVariables'));

	}

	public function update(Request $request, $id)
	{
		$visitorVariables = VisitorVariable::findOrFail($id);
		$visitorVariables->fill($request->all());
		$visitorVariables->save();

		return view('visitor-variable.index');

	}

	public function destroy($id)
	{
		VisitorVariable::destroy($id);

		return view('visitor-variable.index');
	}
}
