<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CheckLevel;

class CheckLevelController extends Controller
{

    public function index()
    {

    	// get all the CheckLevel
        $checkLevels = CheckLevel::all();
        // load the view and pass the checkLevels
    	 return view('check-level.index', compact('checkLevels'));

    }

    public function create()
    {
        // load the create form (app/views/check-level/create.blade.php)
        return view('check-level.create');
    }

    public function store(Request $request)
    {
        CheckLevel::create($request->all());
	    return redirect()->route('check-level.index');
    }


    public function show($id)
    {
         $checkLevels = CheckLevel::findOrFail($id);
    	 return view('check-level.show', compact('checkLevels'));

    }

    public function update(Request $request, $id)
    {
        $checkLevels = CheckLevel::findOrFail($id);
        $checkLevels->fill($request->all());
        $checkLevels->save();
        return view('check-level.index');

    }

    public function destroy($id)
    {
        CheckLevel::destroy($id);
		return view('check-level.index');
    }
}
