<?php

class AdminCompositionsController extends BaseController {

	/**
	 * Composition Repository
	 *
	 * @var Composition
	 */
	protected $composition;

	public function __construct(Composition $composition)
	{
		$this->composition = $composition;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$compositions = $this->composition->all();

		return View::make('admin.compositions.index', compact('compositions'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.compositions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Composition::$rules);

		if ($validation->passes())
		{
			$this->composition->create($input);

			return Redirect::route('admin.compositions.index');
		}

		return Redirect::route('admin.compositions.create')
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
		$composition = $this->composition->findOrFail($id);

		return View::make('admin.compositions.show', compact('composition'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$composition = $this->composition->find($id);

		if (is_null($composition))
		{
			return Redirect::route('admin.compositions.index');
		}

		return View::make('admin.compositions.edit', compact('composition'));
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
		$validation = Validator::make($input, Composition::$rules);

		if ($validation->passes())
		{
			$composition = $this->composition->find($id);
			$composition->update($input);

			return Redirect::route('admin.compositions.show', $id);
		}

		return Redirect::route('admin.compositions.edit', $id)
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
		$this->composition->find($id)->delete();

		return Redirect::route('admin.compositions.index');
	}

}
