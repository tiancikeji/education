<?php

class ExamsController extends BaseController {

	/**
	 * Exam Repository
	 *
	 * @var Exam
	 */
	protected $exam;
  protected $paper;

	public function __construct(Exam $exam,Paper $paper,Exercise $exercise)
	{
		$this->exam = $exam;
    $this->paper = $paper;
		$this->exercise = $exercise;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$exams = $this->exam->all();

		return View::make('exams.index', compact('exams'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
    $papers = $this->paper->all();
		return View::make('exams.create',compact('papers'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
      $current_date = date('Y-m-d H:i:s',time());
      // $endTime = date($current_date, strtotime('+30 minutes'));

      $currentDate = strtotime($current_date);
      $futureDate = $currentDate+(60*30);
      $endTime = date("Y-m-d H:i:s", $futureDate);

      $user_id = Session::get('current_user')->id;

      $exam = $this->exam->create(['start_time' => $current_date,
        'end_time'=> $endTime,
        'user_id'=>$user_id,
        'type'=>Input::get("type"),
        'paper_id' => Input::get('paper_id')]);
			return Redirect::to('/exams/'.$exam->id.'/edit');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$exam = $this->exam->findOrFail($id);

		return View::make('exams.show', compact('exam'));
	}

	public function review()
	{
		$exam = $this->exam->find(Input::get("exam_id"));

		if (is_null($exam))
		{
			return Redirect::route('exams.index');
		}

    

    // $current_date = date('Y-m-d H:i:s',time());
    // $secs = strtotime($exam->end_time) - strtotime($current_date);// == <seconds between the two times>
    // dd($current_date);
    // dd($exam->end_time);
    // $left = intval($secs/60);
    $paper = $this->paper->find($exam->paper_id);
		$exercises = $this->exercise->where('paper_id','=',$paper->id)->get();
    // dd($left);
		return View::make('exams.review', compact('exam','paper','exercises'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$exam = $this->exam->find($id);

		if (is_null($exam))
		{
			return Redirect::route('exams.index');
		}

    

    $current_date = date('Y-m-d H:i:s',time());
    $secs = strtotime($exam->end_time) - strtotime($current_date);// == <seconds between the two times>
    // dd($current_date);
    // dd($exam->end_time);
    $left = intval($secs/60);
    $paper = $this->paper->find($exam->paper_id);
		$exercises = $this->exercise->where('paper_id','=',$paper->id)->get();
    // dd($left);
		return View::make('exams.edit', compact('exam','paper','exercises','left'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
  //finish
	public function update($id)
	{
		// $input = array_except('_method');
    $exam = $this->exam->find($id);
    $paper = $this->paper->find($exam->paper_id);
		$exercises = $this->exercise->where('paper_id','=',$paper->id)->get();
    $answers  = "";
    $score = 0;
    foreach($exercises as $exercise){
       $answers .=  $exercise->id."+".Input::get("exercise_".$exercise->id).";";
       if($exercise->right_answer === Input::get("exercise_".$exercise->id)){
          $score += 1;  
       }
    }

    // var_dump($input);
		// $validation = Validator::make($input, Exam::$rules);
		// if ($validation->passes())
		// {
		$exam->answers = $answers;
    $exam->score = $score;
		$exam->end_time = date('Y-m-d H:i:s');
		$exam->save();
		return Redirect::route('exams.show', $id);
		// }
		// return Redirect::route('exams.edit', $id)
		// 	->withInput()
		// 	->withErrors($validation)
		// 	->with('message', 'There were validation errors.');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->exam->find($id)->delete();

		return Redirect::route('exams.index');
	}

}
