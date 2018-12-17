<?php

namespace App\Http\Controllers;

use App\Hash;
use Illuminate\Http\Request;

class HashController extends Controller
{

	public function index()
	{

		// get all the Hash
		$hashes = Hash::all();

		// load the view and pass the hashes
		return view('hash.index', compact('hashes'));

	}

	public function create()
	{
		// load the create form (app/views/{{modelNamePluralLowerCase}}/create.blade.php)
		return view('{{modelNamePluralLowerCase}}.create');
	}

	public function store(Request $request)
	{
		Hash::create($request->all());

		return redirect()->route('hash.index');
	}


	public function show($id)
	{
		$hashes = Hash::findOrFail($id);

		return view('hash.show', compact('hashes'));

	}

	public function update(Request $request, $id)
	{
		$hashes = Hash::findOrFail($id);
		$hashes->fill($request->all());
		$hashes->save();

		return view('hash.index');

	}

	public function destroy($id)
	{
		Hash::destroy($id);

		return view('hash.index');
	}
}
