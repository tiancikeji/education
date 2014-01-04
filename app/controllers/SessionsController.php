<?php

class SessionsController extends BaseController {
  
    // protected $user;

    protected $layout = 'layouts.main';
    
    public function newpage(){

      return View::make('sessions.new');

    } 

}

