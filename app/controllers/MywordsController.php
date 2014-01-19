<?php

class MywordsController extends BaseController {

	/**
	 * Myword Repository
	 *
	 * @var Myword
	 */
	protected $myword;

	public function __construct(Myword $myword)
	{
		$this->myword = $myword;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$mywords = $this->myword->where('user_id','=',Session::get("current_user")->id)->get();

		return View::make('mywords.index', compact('mywords'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('mywords.create');
	}

	public function add()
	{
			$myword = $this->myword->create(['user_id'=>Session::get("current_user")->id,'chinese'=>Input::get("chinese"),'english'=>Input::get('english')]);

      echo $myword;
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Myword::$rules);

		if ($validation->passes())
		{
			$this->myword->create($input);

			return Redirect::route('mywords.index');
		}

		return Redirect::route('mywords.create')
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
		$myword = $this->myword->findOrFail($id);

		return View::make('mywords.show', compact('myword'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$myword = $this->myword->find($id);

		if (is_null($myword))
		{
			return Redirect::route('mywords.index');
		}

		return View::make('mywords.edit', compact('myword'));
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
		$validation = Validator::make($input, Myword::$rules);

		if ($validation->passes())
		{
			$myword = $this->myword->find($id);
			$myword->update($input);

			return Redirect::route('mywords.show', $id);
		}

		return Redirect::route('mywords.edit', $id)
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
		$this->myword->find($id)->delete();

		return Redirect::route('mywords.index');
	}

}
