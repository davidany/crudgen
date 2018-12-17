<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{

	public function index()
	{

		// get all the Ticket
		$tickets = Ticket::all();

		// load the view and pass the tickets
		return view('ticket.index', compact('tickets'));

	}

	public function create()
	{
		// load the create form (app/views/{{modelNamePluralLowerCase}}/create.blade.php)
		return view('{{modelNamePluralLowerCase}}.create');
	}

	public function store(Request $request)
	{
		Ticket::create($request->all());

		return redirect()->route('ticket.index');
	}


	public function show($id)
	{
		$tickets = Ticket::findOrFail($id);

		return view('ticket.show', compact('tickets'));

	}

	public function update(Request $request, $id)
	{
		$tickets = Ticket::findOrFail($id);
		$tickets->fill($request->all());
		$tickets->save();

		return view('ticket.index');

	}

	public function destroy($id)
	{
		Ticket::destroy($id);

		return view('ticket.index');
	}
}
