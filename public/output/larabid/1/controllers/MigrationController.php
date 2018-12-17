<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Migration;

class MigrationController extends Controller
{

    public function index()
    {

    	// get all the Migration
        $migrations = Migration::all();
        // load the view and pass the migrations
    	 return view('migration.index', compact('migrations'));

    }

    public function create()
    {
        // load the create form (app/views/{{modelNamePluralLowerCase}}/create.blade.php)
        return view('{{modelNamePluralLowerCase}}.create');
    }

    public function store(Request $request)
    {
        Migration::create($request->all());
	    return redirect()->route('migration.index');
    }


    public function show($id)
    {
         $migrations = Migration::findOrFail($id);
    	 return view('migration.show', compact('migrations'));

    }

    public function update(Request $request, $id)
    {
        $migrations = Migration::findOrFail($id);
        $migrations->fill($request->all());
        $migrations->save();
        return view('migration.index');

    }

    public function destroy($id)
    {
        Migration::destroy($id);
		return view('migration.index');
    }
}
