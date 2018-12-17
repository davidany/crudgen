<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PasswordReset;

class PasswordResetController extends Controller
{

    public function index()
    {

    	// get all the PasswordReset
        $passwordResets = PasswordReset::all();
        // load the view and pass the passwordResets
    	 return view('password-reset.index', compact('passwordResets'));

    }

    public function create()
    {
        // load the create form (app/views/{{modelNamePluralLowerCase}}/create.blade.php)
        return view('{{modelNamePluralLowerCase}}.create');
    }

    public function store(Request $request)
    {
        PasswordReset::create($request->all());
	    return redirect()->route('password-reset.index');
    }


    public function show($id)
    {
         $passwordResets = PasswordReset::findOrFail($id);
    	 return view('password-reset.show', compact('passwordResets'));

    }

    public function update(Request $request, $id)
    {
        $passwordResets = PasswordReset::findOrFail($id);
        $passwordResets->fill($request->all());
        $passwordResets->save();
        return view('password-reset.index');

    }

    public function destroy($id)
    {
        PasswordReset::destroy($id);
		return view('password-reset.index');
    }
}
