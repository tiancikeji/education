<?php

class HomeController extends BaseController {
  protected $layout = 'layouts.main';

  public function showWelcome()
	{
    $this->layout->content = View::make('home');
	}

}
