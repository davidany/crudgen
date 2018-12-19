<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TelescopeEntry;

class TelescopeEntryController extends Controller
{

    public function index()
    {

    	// get all the TelescopeEntry
        $telescopeEntries = TelescopeEntry::all();
        // load the view and pass the telescopeEntries
    	 return view('telescope-entry.index', compact('telescopeEntries'));

    }

    public function create()
    {
        // load the create form (app/views/telescope-entry/create.blade.php)
        return view('telescope-entry.create');
    }

    public function store(Request $request)
    {
        TelescopeEntry::create($request->all());
	    return redirect()->route('telescope-entry.index');
    }


    public function show($id)
    {
         $telescopeEntries = TelescopeEntry::findOrFail($id);
    	 return view('telescope-entry.show', compact('telescopeEntries'));

    }

    public function update(Request $request, $id)
    {
        $telescopeEntries = TelescopeEntry::findOrFail($id);
        $telescopeEntries->fill($request->all());
        $telescopeEntries->save();
        return view('telescope-entry.index');

    }

    public function destroy($id)
    {
        TelescopeEntry::destroy($id);
		return view('telescope-entry.index');
    }
}
