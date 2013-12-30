<?php

class UsersController extends BaseController {
  
    protected $user;

    protected $layout = "layouts.admin";
    
    public function index(){

		  // $users = $this->user->all();

      return View::make('admin.users.index',compact('users'));
    } 

    public function login(){
    
      return View::make('login');
    }

    public function dologin(){
    

			return Redirect::to('/plan');
      
    }
}

