<?php

namespace App\Http\Controllers;

use App\AttendeeMessage;
use Illuminate\Http\Request;

class AttendeeMessageController extends Controller
{

	public function index()
	{

		// get all the AttendeeMessage
		$attendeeMessages = AttendeeMessage::all();

		// load the view and pass the attendeeMessages
		return view('attendee-message.index', compact('attendeeMessages'));

	}

	public function create()
	{
		// load the create form (app/views/{{modelNamePluralLowerCase}}/create.blade.php)
		return view('{{modelNamePluralLowerCase}}.create');
	}

	public function store(Request $request)
	{
		AttendeeMessage::create($request->all());

		return redirect()->route('attendee-message.index');
	}


	public function show($id)
	{
		$attendeeMessages = AttendeeMessage::findOrFail($id);

		return view('attendee-message.show', compact('attendeeMessages'));

	}

	public function update(Request $request, $id)
	{
		$attendeeMessages = AttendeeMessage::findOrFail($id);
		$attendeeMessages->fill($request->all());
		$attendeeMessages->save();

		return view('attendee-message.index');

	}

	public function destroy($id)
	{
		AttendeeMessage::destroy($id);

		return view('attendee-message.index');
	}
}
