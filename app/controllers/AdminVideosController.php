<?php

class AdminVideosController extends BaseController {

	/**
	 * Video Repository
	 *
	 * @var Video
	 */
	protected $video;

	protected $paper;

	public function __construct(Video $video,Paper $paper)
	{
		$this->video = $video;

		$this->paper = $paper;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$videos = $this->video->all();

		return View::make('admin.videos.index', compact('videos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$papers = $this->paper->all();
		return View::make('admin.videos.create', compact('papers'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
// print_r($_SERVER);
    // print_r($_POST);
		$input = Input::all();

		 $validation = Validator::make($input, Video::$rules);
		 if ($validation->passes())
    {
     $destinationPath = '';
     $filename        = '';
     if (Input::hasFile('overlay')) {
        $file            = Input::file('overlay');
       $destinationPath = public_path().'/uploads/videos/';
        $filename        = str_random(6) . '_' . $file->getClientOriginalName();
        $uploadSuccess   = $file->move($destinationPath, $filename);
    }
     $videodestinationPath = '';
     $videofilename        = '';
    if (Input::hasFile('url')) {
        $video            = Input::file('url');
      $videodestinationPath = public_path().'/flvplayer/content/';
    $videofilename        = str_random(6) . '_' . $video->getClientOriginalName();
      $uploadSuccess   = $video->move($videodestinationPath, $videofilename);
     }
     $tags = Input::get("tags");
     $this->video = Video::create(['title' => Input::get('title'),
                                  'author' => Input::get('author'),
                                   'url' => $videofilename,
                                   'overlay' => "/uploads/videos/".$filename,
                                   'paper_id'=>Input::get("paper_id"),
                                   'year'=>Input::get("year"),
                                   'month'=>Input::get("month"),
                                   'section'=>Input::get("section"),
                                   'tags'=>implode(",",$tags)]);
	    return Redirect::route('admin.videos.index');
	}

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$video = $this->video->findOrFail($id);

		return View::make('admin.videos.show', compact('video'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$video = $this->video->find($id);

		if (is_null($video))
		{
			return Redirect::route('admin.videos.index');
		}

		return View::make('admin.videos.edit', compact('video'));
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
		$validation = Validator::make($input, Video::$rules);

		if ($validation->passes())
		{
    $destinationPath = '';
     $filename        = '';
     if (Input::hasFile('overlay')) {
        $file            = Input::file('overlay');
       $destinationPath = public_path().'/uploads/videos/';
        $filename        = str_random(6) . '_' . $file->getClientOriginalName();
        $uploadSuccess   = $file->move($destinationPath, $filename);
    }
     $videodestinationPath = '';
     $videofilename        = '';
    if (Input::hasFile('url')) {
        $video            = Input::file('url');
      $videodestinationPath = public_path().'/flvplayer/content/';
    $videofilename        = str_random(6) . '_' . $video->getClientOriginalName();
      $uploadSuccess   = $video->move($videodestinationPath, $videofilename);
     }
     $tags = Input::get("tags");
			$video = $this->video->find($id);
     $video->title = Input::get('title');
     $video->author = Input::get('author');
    $video->url = $videofilename;
    $video->overlay = "/uploads/videos/".$filename;
    $video->paper_id=Input::get("paper_id");
   $video->year=Input::get("year");
   $video->month=Input::get("month");
    $video->section=Input::get("section");
    $video->tags=implode(",",$tags);


			$video->save();

			return Redirect::route('admin.videos.show', $id);
		}

		return Redirect::route('admin.videos.edit', $id)
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
		$this->video->find($id)->delete();

		return Redirect::route('admin.videos.index');
	}

}
