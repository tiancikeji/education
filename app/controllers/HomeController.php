<?php

class HomeController extends BaseController {
  protected $layout = 'layouts.main';

	protected $news;

  public function __construct(News $news)
	{
		$this->news = $news;
	}

  public function showWelcome()
	{

		$news = $this->news->all();
    $this->layout->content = View::make('home', compact('news'));
	}

}
