<?php

class ExercisesController extends BaseController {

	/**
	 * Exercise Repository
	 *
	 * @var Exercise
	 */
	protected $exercise;

	public function __construct(Exercise $exercise)
	{
		$this->exercise = $exercise;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$exercises = $this->exercise->all();

		return View::make('exercises.index', compact('exercises'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('exercises.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Exercise::$rules);

		if ($validation->passes())
		{
			$this->exercise->create($input);

			return Redirect::route('exercises.index');
		}

		return Redirect::route('exercises.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$exercise = $this->exercise->findOrFail($id);

		return View::make('exercises.show', compact('exercise'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$exercise = $this->exercise->find($id);

		if (is_null($exercise))
		{
			return Redirect::route('exercises.index');
		}

		return View::make('exercises.edit', compact('exercise'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Exercise::$rules);

		if ($validation->passes())
		{
			$exercise = $this->exercise->find($id);
			$exercise->update($input);

			return Redirect::route('exercises.show', $id);
		}

		return Redirect::route('exercises.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->exercise->find($id)->delete();

		return Redirect::route('exercises.index');
	}

}
