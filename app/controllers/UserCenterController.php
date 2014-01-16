<?php

class UserCenterController extends BaseController{
  protected $user;
  protected $layout = "layouts.member";

  protected $payment;

  public function __construct(User  $user,Payment $payment)
  {
    $this->payment = $payment;
    $this->user = $user;
  }

  public function index(){

    $payments = $this->payment->where('user_id','=',Session::get('current_user')->id)->get();
    $user = User::find(Session::get('current_user')->id);
    return View::make('usercenter',compact('payments','user'));
  }

  public function plan(){
    return View::make('plan') ;
  }

  public function update(){
    $number=Input::get("number");
    $name=Input::get("name");
    $gender=Input::get("gender");
    $birthday=Input::get("birthday");
    $school=Input::get("school");
    $user=User::find($number) ;
    $user->name=$name;
    $user->gender=$gender;
    $user->birthday=$birthday;
    $user->school=$school;
    $user->save();
    return Redirect::to('/usercenter');
  }
}
