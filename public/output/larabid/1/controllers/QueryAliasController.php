<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QueryAlias;

class QueryAliasController extends Controller
{

    public function index()
    {

    	// get all the QueryAlias
        $queryAliases = QueryAlias::all();
        // load the view and pass the queryAliases
    	 return view('query-alias.index', compact('queryAliases'));

    }

    public function create()
    {
        // load the create form (app/views/{{modelNamePluralLowerCase}}/create.blade.php)
        return view('{{modelNamePluralLowerCase}}.create');
    }

    public function store(Request $request)
    {
        QueryAlias::create($request->all());
	    return redirect()->route('query-alias.index');
    }


    public function show($id)
    {
         $queryAliases = QueryAlias::findOrFail($id);
    	 return view('query-alias.show', compact('queryAliases'));

    }

    public function update(Request $request, $id)
    {
        $queryAliases = QueryAlias::findOrFail($id);
        $queryAliases->fill($request->all());
        $queryAliases->save();
        return view('query-alias.index');

    }

    public function destroy($id)
    {
        QueryAlias::destroy($id);
		return view('query-alias.index');
    }
}
