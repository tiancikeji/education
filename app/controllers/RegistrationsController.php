<?php

class RegistrationsController extends BaseController {
  
    // protected $user;

    protected $layout = 'layouts.main';
    
    public function newpage(){

      return View::make('registrations.new');

    } 

}

