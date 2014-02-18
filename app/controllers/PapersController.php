<?php

class PapersController extends BaseController {

	/**
	 * Paper Repository
	 *
	 * @var Paper
	 */
	protected $paper;

  protected $exam;
  protected $layout = "layouts.member";

	public function __construct(Paper $paper, Exam $exam)
	{
		$this->paper = $paper;
    $this->exam = $exam;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$papers = $this->paper->all();
    $exams= $this->exam->where('user_id','=',Session::get('current_user')->id)->get();
		return View::make('papers.index', compact('papers','exams'));
	}
/**
 *
 */
  public function search(){
    $year=Input::get("year");
    $month=Input::get("month");
    $yearend=Input::get("yearend");
    $monthend=Input::get("monthend");
    $pa= $this->paper->where('id','=',Session::get('current_user')->id)->findOrFail();
    var_dump($pa->id);
    // $papers=$this->paper->where(year-month,'<',) 
		// return View::make('papers.index', compact(''));
  }
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('papers.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Paper::$rules);

		if ($validation->passes())
		{
			$this->paper->create($input);

			return Redirect::route('papers.index');
		}

		return Redirect::route('papers.create')
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
		$paper = $this->paper->findOrFail($id);

		return View::make('papers.show', compact('paper'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$paper = $this->paper->find($id);

		if (is_null($paper))
		{
			return Redirect::route('papers.index');
		}

		return View::make('papers.edit', compact('paper'));
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
		$validation = Validator::make($input, Paper::$rules);

		if ($validation->passes())
		{
			$paper = $this->paper->find($id);
			$paper->update($input);

			return Redirect::route('papers.show', $id);
		}

		return Redirect::route('papers.edit', $id)
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
		$this->paper->find($id)->delete();

		return Redirect::route('papers.index');
	}


}
