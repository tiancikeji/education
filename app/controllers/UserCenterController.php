<?php

class UserCenterController extends BaseController{

  protected $layout = "layouts.member";

  public function index(){
    return View::make('usercenter');
  }

  public function plan(){
    return View::make('plan') ;
  }
}
