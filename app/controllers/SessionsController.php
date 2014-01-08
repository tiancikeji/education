<?php

class SessionsController extends BaseController {
  
    protected $user;

    protected $layout = 'layouts.main';

    public function __construct(User $user)
    {
      $this->user = $user;
    } 

    public function newpage(){

      return View::make('sessions.new');

    } 

    public function save(){
      $username = Input::get("username");
      $password = Input::get("password");
      $model = $this->user->where('email','=',$username)->firstOrFail();
		  if (is_null($model)){
        Session::flash('message', 'user is not exist');
			  return Redirect::to('/sessions/new');
      }
      if ($model->password != $password){
        Session::flash('message', 'password is not correct');
			  return Redirect::to('/sessions/new');
      }
      Session::put('current_user', $model);
			return Redirect::to('/usercenter');
    } 


    public function delete(){
      Session::flush();
			return Redirect::to('/');
    } 
}

