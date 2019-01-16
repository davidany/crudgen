<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ketone;

class KetoneController extends Controller
{

    public function index()
    {

    	// get all the Ketone
        $ketones = Ketone::all();
        // load the view and pass the ketones
    	 return view('ketone.index', compact('ketones'));

    }

    public function create()
    {
        // load the create form (app/views/ketone/create.blade.php)
        return view('ketone.create');
    }

    public function store(Request $request)
    {
        Ketone::create($request->all());
	    return redirect()->route('ketone.index');
    }


    public function show($id)
    {
         $ketones = Ketone::findOrFail($id);
    	 return view('ketone.show', compact('ketones'));

    }

    public function update(Request $request, $id)
    {
        $ketones = Ketone::findOrFail($id);
        $ketones->fill($request->all());
        $ketones->save();
        return view('ketone.index');

    }

    public function destroy($id)
    {
        Ketone::destroy($id);
		return view('ketone.index');
    }
}
