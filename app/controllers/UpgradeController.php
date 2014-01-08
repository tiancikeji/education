<?php

class UpgradeController extends BaseController{

  protected $layout = "layouts.member";

  public function index(){
  
    return View::make('upgrade');
  }

}
