<?php

class AdminUserteachersController extends BaseController {

	/**
	 * Userteacher Repository
	 *
	 * @var Userteacher
	 */
	protected $userteacher;

	public function __construct(Userteacher $userteacher)
	{
		$this->userteacher = $userteacher;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$userteachers = $this->userteacher->all();

		return View::make('admin.userteachers.index', compact('userteachers'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.userteachers.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Userteacher::$rules);

		if ($validation->passes())
		{
			$this->userteacher->create($input);

			return Redirect::route('admin.userteachers.index');
		}

		return Redirect::route('admin.userteachers.create')
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
		$userteacher = $this->userteacher->findOrFail($id);

		return View::make('admin.userteachers.show', compact('userteacher'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$userteacher = $this->userteacher->find($id);

		if (is_null($userteacher))
		{
			return Redirect::route('admin.userteachers.index');
		}

		return View::make('admin.userteachers.edit', compact('userteacher'));
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
		$validation = Validator::make($input, Userteacher::$rules);

		if ($validation->passes())
		{
			$userteacher = $this->userteacher->find($id);
			$userteacher->update($input);

			return Redirect::route('admin.userteachers.show', $id);
		}

		return Redirect::route('admin.userteachers.edit', $id)
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
		$this->userteacher->find($id)->delete();

		return Redirect::route('admin.userteachers.index');
	}

}
