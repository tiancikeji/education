<?php

class AdminUserplansController extends BaseController {

	/**
	 * Userplan Repository
	 *
	 * @var Userplan
	 */
	protected $userplan;

	public function __construct(Userplan $userplan)
	{
		$this->userplan = $userplan;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$userplans = $this->userplan->all();

		return View::make('admin.userplans.index', compact('userplans'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.userplans.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Userplan::$rules);

		if ($validation->passes())
		{
			$this->userplan->create($input);

			return Redirect::route('admin.userplans.index');
		}

		return Redirect::route('admin.userplans.create')
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
		$userplan = $this->userplan->findOrFail($id);

		return View::make('admin.userplans.show', compact('userplan'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$userplan = $this->userplan->find($id);

		if (is_null($userplan))
		{
			return Redirect::route('admin.userplans.index');
		}

		return View::make('admin.userplans.edit', compact('userplan'));
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
		$validation = Validator::make($input, Userplan::$rules);

		if ($validation->passes())
		{
			$userplan = $this->userplan->find($id);
			$userplan->update($input);

			return Redirect::route('admin.userplans.show', $id);
		}

		return Redirect::route('admin.userplans.edit', $id)
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
		$this->userplan->find($id)->delete();

		return Redirect::route('admin.userplans.index');
	}

}
