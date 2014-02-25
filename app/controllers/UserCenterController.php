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


  public function update_user(){

    $user = User::find(Session::get('current_user')->id);
    return View::make('update_user',compact('user')) ;
  }
  
  public function updatepassword(){
    $password=Input::get("newpassword");
    $passwordone=Input::get("newpasswordone");
    if($password==$passwordone||$passwod!=null||$passwordone!=null){
    $user=User::find(Session::get('current_user')->id);
    $user->password=$password;
    $user->save();
    }
     return Redirect::to('/usercenter'); 
  }




  public function update(){
    $number=Input::get("number");
    $name=Input::get("name");
    $gender=Input::get("gender");
    $birthday=Input::get("birthday");
    $school=Input::get("school");
    $location=Input::get("location");
    $grade=Input::get("grade");
    $dream_school=Input::get("dream_school");
    $reason=Input::get("reason");
    $sat_hope_grade=Input::get("sat_hope_grade");
    $study_time_everyweek=Input::get("study_time_everyweek");
    $learn_words=Input::get("learn_words");
    $hope_learn_words=Input::get("hope_learn_words");
    $hope_compisition_times=Input::get("hope_compisition_times");
 if (Input::hasFile('overlay')) {
          $file            = Input::file('overlay');
          $destinationPath = public_path().'/uploads/news/';
          $filename        = str_random(6) . '_' . $file->getClientOriginalName();
          $uploadSuccess   = $file->move($destinationPath, $filename);
      }
    $user=User::find($number) ;
    $user->name=$name;
    $user->gender=$gender;
    $user->birthday=$birthday;
    $user->school=$school;
    $user->location=$location;
    $user->grade=$grade;
    $user->dream_school=$dream_school;
    $user->reason=$reason;
    $user->sat_hope_grade=$sat_hope_grade;
    $user->study_time_everyweek=$study_time_everyweek;
    $user->learn_words=$learn_words;
    $user->hope_learn_words=$hope_learn_words;
    $user->hope_compisition_times=$hope_compisition_times;
    $user->overlay='/uploads/news/'.$filename; 
    $user->save();
    return Redirect::to('/usercenter');
  }
}
