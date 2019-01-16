<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DbCredential;

class DbCredentialController extends Controller
{

    public function index()
    {

    	// get all the DbCredential
        $dbCredential = DbCredential::all();
        // load the view and pass the dbCredential
    	 return view('db-credential.index', compact('dbCredential'));

    }

    public function create()
    {
        // load the create form (app/views/db-credential/create.blade.php)
        return view('db-credential.create');
    }

    public function store(Request $request)
    {
        DbCredential::create($request->all());
	    return redirect()->route('db-credential.index');
    }


    public function show($id)
    {
         $dbCredential = DbCredential::findOrFail($id);
    	 return view('db-credential.show', compact('dbCredential'));

    }

    public function update(Request $request, $id)
    {
        $dbCredential = DbCredential::findOrFail($id);
        $dbCredential->fill($request->all());
        $dbCredential->save();
        return view('db-credential.index');

    }

    public function destroy($id)
    {
        DbCredential::destroy($id);
		return view('db-credential.index');
    }
}
