<?php

class PlansController extends BaseController{

  protected $layout = "layouts.member";
  public function index(){
  
    return View::make('plan');
  }

}
