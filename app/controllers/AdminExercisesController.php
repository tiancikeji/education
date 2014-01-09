<?php

class AdminExercisesController extends BaseController {

	/**
	 * Exercise Repository
	 *
	 * @var Exercise
	 */
	protected $exercise;

  protected $pager;

  protected $answer;
	public function __construct(Exercise $exercise,Paper $paper,Answer $answer)
	{
		$this->exercise = $exercise;
    $this->paper = $paper;
    $this->answer = $answer;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$exercises = $this->exercise->all();

		return View::make('admin.exercises.index', compact('exercises'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
    $papers = Paper::all();
		return View::make('admin.exercises.create',compact('papers'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::except('answers','is_rights');
		$validation = Validator::make($input, Exercise::$rules);
    $answers = Input::get('answers');
    $is_rights = Input::get('is_rights');
		if ($validation->passes())
		{
			$exercise = $this->exercise->create($input);
      // print_r($is_rights);
      // print_r($answers);
      for($i=0;$i < count($answers); $i++){
        Answer::create(['exercises_id' => $exercise->id,
          'description' => $answers[$i],
        'is_right' => $is_rights[$i]]); 

      } 

			return Redirect::route('admin.exercises.index');
		}

		return Redirect::route('admin.exercises.create')
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

		return View::make('admin.exercises.show', compact('exercise'));
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
			return Redirect::route('admin.exercises.index');
		}

		return View::make('admin.exercises.edit', compact('exercise'));
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

			return Redirect::route('admin.exercises.show', $id);
		}

		return Redirect::route('admin.exercises.edit', $id)
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

		return Redirect::route('admin.exercises.index');
	}

}
