<?php

class AdminTeachersController extends BaseController {

	/**
	 * Teacher Repository
	 *
	 * @var Teacher
	 */
	protected $teacher;

	public function __construct(Teacher $teacher)
	{
		$this->teacher = $teacher;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$teachers = $this->teacher->all();

		return View::make('admin.teachers.index', compact('teachers'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.teachers.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Teacher::$rules);

		if ($validation->passes())
		{
      $password  = Hash::make(Input::get('password'));
			$this->teacher->create(['username' => Input::get('username'),'name' => Input::get('name'),'password' => $password]);

			return Redirect::route('admin.teachers.index');
		}

		return Redirect::route('admin.teachers.create')
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
		$teacher = $this->teacher->findOrFail($id);

		return View::make('admin.teachers.show', compact('teacher'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$teacher = $this->teacher->find($id);

		if (is_null($teacher))
		{
			return Redirect::route('admin.teachers.index');
		}

		return View::make('admin.teachers.edit', compact('teacher'));
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
		$validation = Validator::make($input, Teacher::$rules);

		if ($validation->passes())
		{
			$teacher = $this->teacher->find($id);
			$teacher->update($input);

			return Redirect::route('admin.teachers.show', $id);
		}

		return Redirect::route('admin.teachers.edit', $id)
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
		$this->teacher->find($id)->delete();

		return Redirect::route('admin.teachers.index');
	}

}
