<?php

class AdminTopicsController extends BaseController {

	/**
	 * Topic Repository
	 *
	 * @var Topic
	 */
	protected $topic;

  protected $layout = "layouts.admin";

	public function __construct(Topic $topic)
	{
		$this->topic = $topic;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$topics = $this->topic->all();

		return View::make('admin.topics.index', compact('topics'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.topics.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Topic::$rules);

		if ($validation->passes())
		{
			$this->topic->create($input);

			return Redirect::route('admin.topics.index');
		}

		return Redirect::route('admin.topics.create')
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
		$topic = $this->topic->findOrFail($id);

		return View::make('admin.topics.show', compact('topic'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$topic = $this->topic->find($id);

		if (is_null($topic))
		{
			return Redirect::route('admin.topics.index');
		}

		return View::make('admin.topics.edit', compact('topic'));
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
		$validation = Validator::make($input, Topic::$rules);

		if ($validation->passes())
		{
			$topic = $this->topic->find($id);
			$topic->update($input);

			return Redirect::route('admin.topics.show', $id);
		}

		return Redirect::route('admin.topics.edit', $id)
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
		$this->topic->find($id)->delete();

		return Redirect::route('admin.topics.index');
	}

}
