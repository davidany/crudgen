<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    public function index()
    {

    	// get all the User
        $users = User::all();
        // load the view and pass the users
    	 return view('user.index', compact('users'));

    }

    public function create()
    {
        // load the create form (app/views/user/create.blade.php)
        return view('user.create');
    }

    public function store(Request $request)
    {
        User::create($request->all());
	    return redirect()->route('user.index');
    }


    public function show($id)
    {
         $users = User::findOrFail($id);
    	 return view('user.show', compact('users'));

    }

    public function update(Request $request, $id)
    {
        $users = User::findOrFail($id);
        $users->fill($request->all());
        $users->save();
        return view('user.index');

    }

    public function destroy($id)
    {
        User::destroy($id);
		return view('user.index');
    }
}
