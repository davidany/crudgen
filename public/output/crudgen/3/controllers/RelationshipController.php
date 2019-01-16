<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Relationship;

class RelationshipController extends Controller
{

    public function index()
    {

    	// get all the Relationship
        $relationship = Relationship::all();
        // load the view and pass the relationship
    	 return view('relationship.index', compact('relationship'));

    }

    public function create()
    {
        // load the create form (app/views/relationship/create.blade.php)
        return view('relationship.create');
    }

    public function store(Request $request)
    {
        Relationship::create($request->all());
	    return redirect()->route('relationship.index');
    }


    public function show($id)
    {
         $relationship = Relationship::findOrFail($id);
    	 return view('relationship.show', compact('relationship'));

    }

    public function update(Request $request, $id)
    {
        $relationship = Relationship::findOrFail($id);
        $relationship->fill($request->all());
        $relationship->save();
        return view('relationship.index');

    }

    public function destroy($id)
    {
        Relationship::destroy($id);
		return view('relationship.index');
    }
}
