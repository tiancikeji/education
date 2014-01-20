<?php

class AdminNewsController extends BaseController {

  protected $layout = "layouts.admin";
	/**
	 * News Repository
	 *
	 * @var News
	 */
	protected $news;

	public function __construct(News $news)
	{
		$this->news = $news;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$news = $this->news->all();

		return View::make('admin.news.index', compact('news'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.news.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, News::$rules);

		if ($validation->passes())
		{
			// $this->news->create($input);
      
      $destinationPath = '';
      $filename        = '';

      if (Input::hasFile('overlay')) {
          $file            = Input::file('overlay');
          $destinationPath = public_path().'/uploads/news/';
          $filename        = str_random(6) . '_' . $file->getClientOriginalName();
          $uploadSuccess   = $file->move($destinationPath, $filename);
      }

      $this->news = News::create(['author' => Input::get('author'),
        'published_date' => Input::get('published_date'),
        'body' => Input::get('body'),
        'title' => Input::get('title'),
        'overlay' =>'/uploads/news/'.$filename ]);

			return Redirect::route('admin.news.index');
		}

		return Redirect::route('admin.news.create')
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
		$news = $this->news->findOrFail($id);

		return View::make('admin.news.show', compact('news'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$news = $this->news->find($id);

		if (is_null($news))
		{
			return Redirect::route('admin.news.index');
		}

		return View::make('admin.news.edit', compact('news'));
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
		$validation = Validator::make($input, News::$rules);

		if ($validation->passes())
		{
			$news = $this->news->find($id);
			$news->update($input);

			return Redirect::route('admin.news.show', $id);
		}

		return Redirect::route('admin.news.edit', $id)
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
		$this->news->find($id)->delete();

		return Redirect::route('admin.news.index');
	}

} 