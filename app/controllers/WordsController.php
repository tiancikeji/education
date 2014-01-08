<?php

class WordsController extends BaseController {

  protected $layout = "layouts.member";
	/**
	 * Word Repository
	 *
	 * @var Word
	 */
	protected $word;

	public function __construct(Word $word)
	{
		$this->word = $word;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$words = $this->word->all();

		return View::make('words.index', compact('words'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('words.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Word::$rules);

		if ($validation->passes())
		{
			$this->word->create($input);

			return Redirect::route('words.index');
		}

		return Redirect::route('words.create')
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
		$word = $this->word->findOrFail($id);

		return View::make('words.show', compact('word'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$word = $this->word->find($id);

		if (is_null($word))
		{
			return Redirect::route('words.index');
		}

		return View::make('words.edit', compact('word'));
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
		$validation = Validator::make($input, Word::$rules);

		if ($validation->passes())
		{
			$word = $this->word->find($id);
			$word->update($input);

			return Redirect::route('words.show', $id);
		}

		return Redirect::route('words.edit', $id)
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
		$this->word->find($id)->delete();

		return Redirect::route('words.index');
	}

}
