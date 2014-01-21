<?php

class AdminExamsController extends BaseController {

	/**
	 * Exam Repository
	 *
	 * @var Exam
	 */
	protected $exam;

	public function __construct(Exam $exam)
	{
		$this->exam = $exam;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$exams = $this->exam->all();

		return View::make('admin.exams.index', compact('exams'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.exams.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Exam::$rules);

		if ($validation->passes())
		{
			$this->exam->create($input);

			return Redirect::route('admin.exams.index');
		}

		return Redirect::route('admin.exams.create')
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
		$exam = $this->exam->findOrFail($id);

		return View::make('admin.exams.show', compact('exam'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$exam = $this->exam->find($id);

		if (is_null($exam))
		{
			return Redirect::route('admin.exams.index');
		}

		return View::make('admin.exams.edit', compact('exam'));
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
		$validation = Validator::make($input, Exam::$rules);

		if ($validation->passes())
		{
			$exam = $this->exam->find($id);
			$exam->update($input);

			return Redirect::route('admin.exams.show', $id);
		}

		return Redirect::route('admin.exams.edit', $id)
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
		$this->exam->find($id)->delete();

		return Redirect::route('admin.exams.index');
	}

}
