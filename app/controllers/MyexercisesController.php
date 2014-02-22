<?php

class MyexercisesController extends BaseController {

	/**
	 * Myexercise Repository
	 *
	 * @var Myexercise
	 */
	protected $myexercise;

	public function __construct(Myexercise $myexercise)
	{
		$this->myexercise = $myexercise;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$myexercises = $this->myexercise->all();
    $exercise_ids = array();
    for($i = 0 ; $i < count($myexercises); $i++ ) {
      $exercise_ids[$i] = $myexercises[$i]->exercise_id;
    }
    // var_dump($exercise_ids);
    $exercises = Exercise::whereIn("id",$exercise_ids)->get();

    // var_dump(count($exercises));
		return View::make('myexercises.index', compact('exercises'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('myexercises.create');
	}

	public function add()
	{
		$exercise = 	$this->myexercise->create(['user_id' => Session::get("current_user")->id,'exercise_id'=>Input::get("exercise_id")]);
    echo $exercise;
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Myexercise::$rules);

		if ($validation->passes())
		{
			$this->myexercise->create($input);

			return Redirect::route('myexercises.index');
		}

		return Redirect::route('myexercises.create')
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
		$myexercise = $this->myexercise->findOrFail($id);

		return View::make('myexercises.show', compact('myexercise'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$myexercise = $this->myexercise->find($id);

		if (is_null($myexercise))
		{
			return Redirect::route('myexercises.index');
		}

		return View::make('myexercises.edit', compact('myexercise'));
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
		$validation = Validator::make($input, Myexercise::$rules);

		if ($validation->passes())
		{
			$myexercise = $this->myexercise->find($id);
			$myexercise->update($input);

			return Redirect::route('myexercises.show', $id);
		}

		return Redirect::route('myexercises.edit', $id)
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
		$this->myexercise->find($id)->delete();

		return Redirect::route('myexercises.index');
	}

}
