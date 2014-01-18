<?php

class AdminHomeworksController extends BaseController {

	/**
	 * Homework Repository
	 *
	 * @var Homework
	 */
	protected $homework;

	protected $exercise;

	public function __construct(Homework $homework,Exercise $exercise)
	{
		$this->homework = $homework;

		$this->exercise = $exercise;
	}

  public function add_exercise(){
    $homework_id = Input::get("homework_id");

    $exercise_id = Input::get("exercise_id");
    $homework = Homework::find($homework_id);
    $homework->exercise_ids = $homework->exercise_ids.",".$exercise_id;
    $homework->save();
    echo $homework_id;
  }
  public function delete_exercise(){
    $homework_id = Input::get("homework_id");

    $homework = Homework::find($homework_id);
    $exercise_id = Input::get("exercise_id");
    $arrs = explode(",",$homework->exercise_ids);
    for($i=0;$i<count($arrs);$i++){
      if($arrs[$i]==$exercise_id) {
          unset($arrs[$i]);
      }
    }
    $homework->exercise_ids = implode(",",$arrs);

    $homework->save();
    echo $homework_id;
  }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$homeworks = $this->homework->all();
		return View::make('admin.homeworks.index', compact('homeworks'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.homeworks.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::except(['exercise_ids']);

		$validation = Validator::make($input, Homework::$rules);
		if ($validation->passes())
		{
			$homework = $this->homework->create($input);
      // $homework->exercise_ids = implode(',',Input::get('exercise_ids'));
      $homework->save();
			return Redirect::route('admin.homeworks.index');
		}
		return Redirect::route('admin.homeworks.create')
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

    $arrs = explode(",",$homework->exercise_ids);
		$exercises = $this->exercise->all();
		return View::make('admin.homeworks.show', compact('homework','exercises','arrs'));
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
			return Redirect::route('admin.homeworks.index');
		}

		return View::make('admin.homeworks.edit', compact('homework'));
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

			return Redirect::route('admin.homeworks.show', $id);
		}

		return Redirect::route('admin.homeworks.edit', $id)
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

		return Redirect::route('admin.homeworks.index');
	}

}
