<?php

namespace App\Http\Controllers;

use App\TelescopeMonitoring;
use Illuminate\Http\Request;

class TelescopeMonitoringController extends Controller
{

	public function index()
	{

		// get all the TelescopeMonitoring
		$telescopeMonitoring = TelescopeMonitoring::all();

		// load the view and pass the telescopeMonitoring
		return view('telescope-monitoring.index', compact('telescopeMonitoring'));

	}

	public function create()
	{
		// load the create form (app/views/{{modelNamePluralLowerCase}}/create.blade.php)
		return view('{{modelNamePluralLowerCase}}.create');
	}

	public function store(Request $request)
	{
		TelescopeMonitoring::create($request->all());

		return redirect()->route('telescope-monitoring.index');
	}


	public function show($id)
	{
		$telescopeMonitoring = TelescopeMonitoring::findOrFail($id);

		return view('telescope-monitoring.show', compact('telescopeMonitoring'));

	}

	public function update(Request $request, $id)
	{
		$telescopeMonitoring = TelescopeMonitoring::findOrFail($id);
		$telescopeMonitoring->fill($request->all());
		$telescopeMonitoring->save();

		return view('telescope-monitoring.index');

	}

	public function destroy($id)
	{
		TelescopeMonitoring::destroy($id);

		return view('telescope-monitoring.index');
	}
}
