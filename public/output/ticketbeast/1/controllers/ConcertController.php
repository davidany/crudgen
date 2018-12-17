<?php

namespace App\Http\Controllers;

use App\Concert;
use Illuminate\Http\Request;

class ConcertController extends Controller
{

	public function index()
	{

		// get all the Concert
		$concerts = Concert::all();

		// load the view and pass the concerts
		return view('concert.index', compact('concerts'));

	}

	public function create()
	{
		// load the create form (app/views/{{modelNamePluralLowerCase}}/create.blade.php)
		return view('{{modelNamePluralLowerCase}}.create');
	}

	public function store(Request $request)
	{
		Concert::create($request->all());

		return redirect()->route('concert.index');
	}


	public function show($id)
	{
		$concerts = Concert::findOrFail($id);

		return view('concert.show', compact('concerts'));

	}

	public function update(Request $request, $id)
	{
		$concerts = Concert::findOrFail($id);
		$concerts->fill($request->all());
		$concerts->save();

		return view('concert.index');

	}

	public function destroy($id)
	{
		Concert::destroy($id);

		return view('concert.index');
	}
}
