<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{

    public function index()
    {

    	// get all the Project
        $project = Project::all();
        // load the view and pass the project
    	 return view('project.index', compact('project'));

    }

    public function create()
    {
        // load the create form (app/views/project/create.blade.php)
        return view('project.create');
    }

    public function store(Request $request)
    {
        Project::create($request->all());
	    return redirect()->route('project.index');
    }


    public function show($id)
    {
         $project = Project::findOrFail($id);
    	 return view('project.show', compact('project'));

    }

    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $project->fill($request->all());
        $project->save();
        return view('project.index');

    }

    public function destroy($id)
    {
        Project::destroy($id);
		return view('project.index');
    }
}
