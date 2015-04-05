<?php namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Carbon\Carbon;

class EventsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$events = Event::oldest('dateTime')->get();

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
		$data = [];
		$data['day'] = Carbon::now()->day;
		$data['month'] = Carbon::now()->month;
		$data['year'] = Carbon::now()->year;
		$data['hour'] = Carbon::now()->hour;
		$data['minute'] = Carbon::now()->minute;

		return view('events.create', compact('data'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Request::all();

		$event = Event::create($input);

		// Т.к. поле "slug" не заполняется в форме,
		// то заполняем вручную
		$slug = $input['name'];
		$event->setAttribute('slug', $slug);

		// Вручную собираем дату из полей формы
		$dateTime = $input['year'].'-'.$input['month'].'-'.$input['day'].' '.$input['hour'].':'.$input['minute'].':'.'00';
		$event->setAttribute('dateTime', $dateTime);

		$event->update(['slug', 'dateTime'], [$slug, $dateTime]);

		return redirect('events');
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
