<?php

namespace App\Http\Controllers;

use App\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{

	public function index()
	{

		// get all the Visitor
		$visitors = Visitor::all();

		// load the view and pass the visitors
		return view('visitor.index', compact('visitors'));

	}

	public function create()
	{
		// load the create form (app/views/{{modelNamePluralLowerCase}}/create.blade.php)
		return view('{{modelNamePluralLowerCase}}.create');
	}

	public function store(Request $request)
	{
		Visitor::create($request->all());

		return redirect()->route('visitor.index');
	}


	public function show($id)
	{
		$visitors = Visitor::findOrFail($id);

		return view('visitor.show', compact('visitors'));

	}

	public function update(Request $request, $id)
	{
		$visitors = Visitor::findOrFail($id);
		$visitors->fill($request->all());
		$visitors->save();

		return view('visitor.index');

	}

	public function destroy($id)
	{
		Visitor::destroy($id);

		return view('visitor.index');
	}
}
