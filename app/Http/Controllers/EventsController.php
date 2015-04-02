<?php namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class EventsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$events = Event::all();

		if (!$events->count()) {
			return view('events.no-results');
		} else {
			return view('events.index', compact('events'));
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param Event $event
	 * @return Response
	 */
	public function show(Event $event)
	{
		return view('events.show', compact('event'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param Event $event
	 * @return Response
	 */
	public function edit(Event $event)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param Event $event
	 * @return Response
	 */
	public function update(Event $event)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param Event $event
	 * @return Response
	 */
	public function destroy(Event $event)
	{
		//
	}

}
