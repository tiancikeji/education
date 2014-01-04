<?php

class UsersController extends BaseController {
  
    protected $user;

    protected $layout = "layouts.admin";
    
    public function index(){

		  // $users = $this->user->all();

      return View::make('admin.users.index',compact('users'));
    } 

}

