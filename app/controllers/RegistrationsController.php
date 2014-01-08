<?php

class RegistrationsController extends BaseController {
  
    protected $user;

    protected $layout = 'layouts.main';
    
    public function __construct(User $user)
    {
      $this->user = $user;
    }


    public function newpage(){

      return View::make('registrations.new');

    } 

    public function store(){
    	$input = Input::all();
      $validation = Validator::make($input, User::$rules);

      if ($validation->passes())
      {
        $this->user->create($input);

        Session::put('current_user', $this->user);
        return Redirect::to('/usercenter');
      }

      return Redirect::to('/registrations/new')
        ->withInput()
        ->withErrors($validation)
        ->with('message', 'There were validation errors.');
    
      }

}

