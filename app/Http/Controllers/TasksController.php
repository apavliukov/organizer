<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tasks = Task::all();

		if (!$tasks->count()) {
			return view('tasks.no-results');
		} else {
			return view('tasks.index', compact('tasks'));
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
	 * @param Task $task
	 * @return Response
	 */
	public function show(Task $task)
	{
		return view('tasks.show', compact('task'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param Task $task
	 * @return Response
	 */
	public function edit(Task $task)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param Task $task
	 * @return Response
	 */
	public function update(Task $task)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param Task $task
	 * @return Response
	 */
	public function destroy(Task $task)
	{
		//
	}

}
