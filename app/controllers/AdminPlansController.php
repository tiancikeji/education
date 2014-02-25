<?php

class AdminPlansController extends BaseController {

	/**
	 * Plan Repository
	 *
	 * @var Plan
	 */
	protected $plan;
	protected $plan_task;

	public function __construct(Plan $plan,PlanTask $plan_task)
	{
		$this->plan = $plan;
		$this->plan_task = $plan_task;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$plans = $this->plan->all();

		return View::make('admin.plans.index', compact('plans'));
	}

  public function preview(){

		$plan = $this->plan->findOrFail(Input::get("plan_id"));
		return View::make('admin.plans.preview', compact('plan'));
  }
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.plans.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::except('start_date','end_date','content');
    // var_dump($input);
		$validation = Validator::make($input, Plan::$rules);
    $start_dates = Input::get("start_date");
    $end_dates = Input::get("end_date");
    $contents = Input::get("content");
		if ($validation->passes())
		{
			$plan = $this->plan->create($input);

     for($i=0;$i<count($start_dates);$i++){
       PlanTask::create(['plan_id' => $plan->id,
          'start_date' => $start_dates[$i],
          'end_date' => $end_dates[$i],
          'content' => $contents[$i],
          'type' => Input::get("type")]); 

      }
			return Redirect::route('admin.plans.index');
		}

		return Redirect::route('admin.plans.create')
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
		$plan = $this->plan->findOrFail($id);
		return View::make('admin.plans.show', compact('plan'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$plan = $this->plan->find($id);

		if (is_null($plan))
		{
			return Redirect::route('admin.plans.index');
		}

		return View::make('admin.plans.edit', compact('plan'));
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
		$validation = Validator::make($input, Plan::$rules);

		if ($validation->passes())
		{
			$plan = $this->plan->find($id);
			$plan->update($input);
			return Redirect::route('admin.plans.show', $id);
		}
		return Redirect::route('admin.plans.edit', $id)
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
		$this->plan->find($id)->delete();

		return Redirect::route('admin.plans.index');
	}

}
