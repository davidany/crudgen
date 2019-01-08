<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Path;

class PathController extends Controller
{

    public function index()
    {

    	// get all the Path
        $paths = Path::all();
        // load the view and pass the paths
    	 return view('path.index', compact('paths'));

    }

    public function create()
    {
        // load the create form (app/views/path/create.blade.php)
        return view('path.create');
    }

    public function store(Request $request)
    {
        Path::create($request->all());
	    return redirect()->route('path.index');
    }


    public function show($id)
    {
         $paths = Path::findOrFail($id);
    	 return view('path.show', compact('paths'));

    }

    public function update(Request $request, $id)
    {
        $paths = Path::findOrFail($id);
        $paths->fill($request->all());
        $paths->save();
        return view('path.index');

    }

    public function destroy($id)
    {
        Path::destroy($id);
		return view('path.index');
    }
}