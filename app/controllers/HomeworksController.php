<?php

class HomeworksController extends BaseController {

	/**
	 * Homework Repository
	 *
	 * @var Homework
	 */
	protected $homework;

	public function __construct(Homework $homework)
	{
		$this->homework = $homework;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$homeworks = $this->homework->all();

		return View::make('homeworks.index', compact('homeworks'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('homeworks.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Homework::$rules);

		if ($validation->passes())
		{
			$this->homework->create($input);

			return Redirect::route('homeworks.index');
		}

		return Redirect::route('homeworks.create')
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
		$homework = $this->homework->findOrFail($id);

		return View::make('homeworks.show', compact('homework'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$homework = $this->homework->find($id);

		if (is_null($homework))
		{
			return Redirect::route('homeworks.index');
		}

		return View::make('homeworks.edit', compact('homework'));
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
		$validation = Validator::make($input, Homework::$rules);

		if ($validation->passes())
		{
			$homework = $this->homework->find($id);
			$homework->update($input);

			return Redirect::route('homeworks.show', $id);
		}

		return Redirect::route('homeworks.edit', $id)
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
		$this->homework->find($id)->delete();

		return Redirect::route('homeworks.index');
	}

}
