<?php

class AdminPlanTasksController extends BaseController {

	/**
	 * Plan_task Repository
	 *
	 * @var Plan_task
	 */
	protected $plan_task;
  protected $plan ;

	public function __construct(Plan $plan,PlanTask $planTask)
	{
		$this->plan_task = $planTask;
    $this->plan = $plan;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$plan_tasks = $this->plan_task->all();

		return View::make('admin.plan_tasks.index', compact('plan_tasks'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
    $plan_id = Input::get('plan_id');
    $plan = $this->plan->find($plan_id);
		return View::make('admin.plan_tasks.create',compact('plan'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, PlanTask::$rules);

		if ($validation->passes())
		{
			$this->plan_task->create($input);

			return Redirect::to("/admin/plans/".Input::get("plan_id"));
		}

		return Redirect::route('admin.plan_tasks.create')
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
		$plan_task = $this->plan_task->findOrFail($id);

		return View::make('admin.plan_tasks.show', compact('plan_task'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$plan_task = $this->plan_task->find($id);

		if (is_null($plan_task))
		{
			return Redirect::route('admin.plan_tasks.index');
		}

		return View::make('admin.plan_tasks.edit', compact('plan_task'));
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
		$validation = Validator::make($input, Plan_task::$rules);

		if ($validation->passes())
		{
			$plan_task = $this->plan_task->find($id);
			$plan_task->update($input);

			return Redirect::route('admin.plan_tasks.show', $id);
		}

		return Redirect::route('admin.plan_tasks.edit', $id)
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
		$this->plan_task->find($id)->delete();

	  return Redirect::route('admin.plans.index');
	}

}
