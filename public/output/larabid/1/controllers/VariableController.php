<?php

namespace App\Http\Controllers;

use App\Variable;
use Illuminate\Http\Request;

class VariableController extends Controller
{

	public function index()
	{

		// get all the Variable
		$variables = Variable::all();

		// load the view and pass the variables
		return view('variable.index', compact('variables'));

	}

	public function create()
	{
		// load the create form (app/views/{{modelNamePluralLowerCase}}/create.blade.php)
		return view('{{modelNamePluralLowerCase}}.create');
	}

	public function store(Request $request)
	{
		Variable::create($request->all());

		return redirect()->route('variable.index');
	}


	public function show($id)
	{
		$variables = Variable::findOrFail($id);

		return view('variable.show', compact('variables'));

	}

	public function update(Request $request, $id)
	{
		$variables = Variable::findOrFail($id);
		$variables->fill($request->all());
		$variables->save();

		return view('variable.index');

	}

	public function destroy($id)
	{
		Variable::destroy($id);

		return view('variable.index');
	}
}
