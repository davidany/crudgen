<?php

namespace App\Http\Controllers;

use App\Invitation;
use Illuminate\Http\Request;

class InvitationController extends Controller
{

	public function index()
	{

		// get all the Invitation
		$invitations = Invitation::all();

		// load the view and pass the invitations
		return view('invitation.index', compact('invitations'));

	}

	public function create()
	{
		// load the create form (app/views/{{modelNamePluralLowerCase}}/create.blade.php)
		return view('{{modelNamePluralLowerCase}}.create');
	}

	public function store(Request $request)
	{
		Invitation::create($request->all());

		return redirect()->route('invitation.index');
	}


	public function show($id)
	{
		$invitations = Invitation::findOrFail($id);

		return view('invitation.show', compact('invitations'));

	}

	public function update(Request $request, $id)
	{
		$invitations = Invitation::findOrFail($id);
		$invitations->fill($request->all());
		$invitations->save();

		return view('invitation.index');

	}

	public function destroy($id)
	{
		Invitation::destroy($id);

		return view('invitation.index');
	}
}
