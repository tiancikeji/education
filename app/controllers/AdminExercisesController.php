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
		$exercises = $this->exercise->where('paper_id','=',Input::get('paper_id'))->get();

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
		// $input = Input::except('answers','numbers');
		// $validation = Validator::make($input, Exercise::$rules);
    // $answers = Input::get('answers');
    // $numbers = Input::get('numbers');
		// if ($validation->passes())
		//{

			// $exercise = $this->exercise->create($input);
      // print_r($is_rights);
      // print_r($answers);
      
      // for($i=0;$i < count($answers); $i++){
      //   if(!empty($numbers[$i])) {
      //     Answer::create(['exercises_id' => $exercise->id,
      //       'description' => $answers[$i],
      //       'number' => $numbers[$i]]);  
      //   }
      // } 
     $destinationPath = '';
     $filename        = '';

      if (Input::hasFile('excel')) {
          $file            = Input::file('excel');
          $destinationPath = public_path().'/uploads/exercises/';
          $filename        = str_random(6) . '_' . $file->getClientOriginalName();
          $uploadSuccess   = $file->move($destinationPath, $filename);
      }

      $excel =  public_path()."/uploads/exercises/".$filename;
      // echo $excel;
      $paper_id = Input::get("paper_id");

      $point_arr =  Excel::load($excel)->toArray()['考点'];
      for($l=1;$l<count($point_arr)-1;$l++){
        $point = new Point; 
        $point->paper_id = $paper_id;
        $point->no = $point_arr[$l][1];
        $point->content = $point_arr[$l][2];
        $point->save();
      }
      
      $article_arr = Excel::load($excel)->toArray()['文章列表']; 
      // var_dump($article_arr);
      
      for($n=1;$n<count($article_arr)-1;$n++) {
        $article = new Article;
        $article->no = $article_arr[$n][1];
        $article->paper_id = $paper_id;
        $article->content = $article_arr[$n][2];
        if(!empty($article->no)){
          $article->save();
        }
      }

      $arr = Excel::load($excel)->toArray()['题目列表']; 

      for($i=1; $i<count($arr)-1;$i++){
        $exercise  = new Exercise;
        $exercise->paper_id=$paper_id;
        $exercise->type = $arr[$i][2];
        $exercise->section = $arr[$i][3];
        $exercise->no =  $arr[$i][4];
        $exercise->article_no = $arr[$i][5];
        $exercise->description =  $arr[$i][6];
        $exercise->right_answer =  $arr[$i][12];
        $exercise->point_no = $arr[$i][13];
        $exercise->hard =  $arr[$i][14];
        $exercise->note =  $arr[$i][15];
        $exercise->save();
        $numberarr = ["A","B","C","D","E"];
        for($j=0;$j < count($numberarr); $j++){
            $answer_option =  $arr[$i][7+$j] ;
          Answer::create(['exercises_id' => $exercise->id,
          'description' => $answer_option,
          'number' => $numberarr[$j]]);  
        }  
      }

			return Redirect::to('/admin/exercises?paper_id='.$paper_id);
    //}

		// return Redirect::route('admin.exercises.create')
		// 	->withInput()
		// 	->withErrors($validation)
		// 	->with('message', 'There were validation errors.');

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
