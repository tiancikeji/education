<?php

class AdminpermissionsController extends BaseController {

	/**
	 * Adminpermission Repository
	 *
	 * @var Adminpermission
	 */
	protected $adminpermission;

	public function __construct(Adminpermission $adminpermission)
	{
		$this->adminpermission = $adminpermission;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$adminpermissions = $this->adminpermission->all();

		return View::make('adminpermissions.index', compact('adminpermissions'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('adminpermissions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Adminpermission::$rules);

		if ($validation->passes())
		{
			$this->adminpermission->create($input);

			return Redirect::route('adminpermissions.index');
		}

		return Redirect::route('adminpermissions.create')
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
		$adminpermission = $this->adminpermission->findOrFail($id);

		return View::make('adminpermissions.show', compact('adminpermission'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$adminpermission = $this->adminpermission->find($id);

		if (is_null($adminpermission))
		{
			return Redirect::route('adminpermissions.index');
		}

		return View::make('adminpermissions.edit', compact('adminpermission'));
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
		$validation = Validator::make($input, Adminpermission::$rules);

		if ($validation->passes())
		{
			$adminpermission = $this->adminpermission->find($id);
			$adminpermission->update($input);

			return Redirect::route('adminpermissions.show', $id);
		}

		return Redirect::route('adminpermissions.edit', $id)
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
		$this->adminpermission->find($id)->delete();

		return Redirect::route('adminpermissions.index');
	}

}
