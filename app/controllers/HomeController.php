<?php

class HomeController extends BaseController {
  protected $layout = 'layouts.main';

	protected $news;
  protected $video;

  public function __construct(News $news,Video $video)
	{
    $this->video = $video;
		$this->news = $news;
	}

  public function showWelcome()
	{

		$news = $this->news->take(4)->orderBy('created_at','desc')->get();
    $videos = $this->video->take(3)->get();
    $this->layout->content = View::make('home', compact('news','videos'));
	}

}
