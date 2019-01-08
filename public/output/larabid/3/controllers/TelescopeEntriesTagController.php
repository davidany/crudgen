<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TelescopeEntriesTag;

class TelescopeEntriesTagController extends Controller
{

    public function index()
    {

    	// get all the TelescopeEntriesTag
        $telescopeEntriesTags = TelescopeEntriesTag::all();
        // load the view and pass the telescopeEntriesTags
    	 return view('telescope-entries-tag.index', compact('telescopeEntriesTags'));

    }

    public function create()
    {
        // load the create form (app/views/telescope-entries-tag/create.blade.php)
        return view('telescope-entries-tag.create');
    }

    public function store(Request $request)
    {
        TelescopeEntriesTag::create($request->all());
	    return redirect()->route('telescope-entries-tag.index');
    }


    public function show($id)
    {
         $telescopeEntriesTags = TelescopeEntriesTag::findOrFail($id);
    	 return view('telescope-entries-tag.show', compact('telescopeEntriesTags'));

    }

    public function update(Request $request, $id)
    {
        $telescopeEntriesTags = TelescopeEntriesTag::findOrFail($id);
        $telescopeEntriesTags->fill($request->all());
        $telescopeEntriesTags->save();
        return view('telescope-entries-tag.index');

    }

    public function destroy($id)
    {
        TelescopeEntriesTag::destroy($id);
		return view('telescope-entries-tag.index');
    }
}