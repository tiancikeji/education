<?php

class UserCenterController extends BaseController{

  protected $layout = "layouts.member";

	protected $payment;

	public function __construct(Payment $payment)
	{
		$this->payment = $payment;
	}

  public function index(){

		$payments = $this->payment->where('user_id','=',Session::get('current_user')->id)->get();
    return View::make('usercenter',compact('payments'));
  }

  public function plan(){
    return View::make('plan') ;
  }
}
