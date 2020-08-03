<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Version;

class VersionController extends Controller
{

    public function index()
    {

    	// get all the Version
        $version = Version::all();
        // load the view and pass the version
    	 return view('version.index', compact('version'));

    }

    public function create()
    {
        // load the create form (app/views/version/create.blade.php)
        return view('version.create');
    }

    public function store(Request $request)
    {
        Version::create($request->all());
	    return redirect()->route('version.index');
    }


    public function show($id)
    {
         $version = Version::findOrFail($id);
    	 return view('version.show', compact('version'));

    }

    public function update(Request $request, $id)
    {
        $version = Version::findOrFail($id);
        $version->fill($request->all());
        $version->save();
        return view('version.index');

    }

    public function destroy($id)
    {
        Version::destroy($id);
		return view('version.index');
    }
}
