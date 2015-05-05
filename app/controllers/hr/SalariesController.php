<?php

class SalariesController extends \BaseController {

	/**
	 * Display a listing of salaries
	 *
	 * @return Response
	 */
	public function index()
	{
		$salaries = Salary::all();

		return View::make('salaries.index', compact('salaries'));
	}

	/**
	 * Show the form for creating a new salary
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('salaries.create');
	}

	/**
	 * Store a newly created salary in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Salary::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Salary::create($data);

		return Redirect::route('salaries.index');
	}

	/**
	 * Display the specified salary.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$salary = Salary::findOrFail($id);

		return View::make('salaries.show', compact('salary'));
	}

	/**
	 * Show the form for editing the specified salary.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$salary = Salary::find($id);

		return View::make('salaries.edit', compact('salary'));
	}

	/**
	 * Update the specified salary in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$salary = Salary::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Salary::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$salary->update($data);

		return Redirect::route('salaries.index');
	}

	/**
	 * Remove the specified salary from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Salary::destroy($id);

		return Redirect::route('salaries.index');
	}

}
