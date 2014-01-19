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
    
    public function forgetpassword(){
      return View::make('sessions.forget');
    } 
    public function resetpassword(){
      $username = Input::get("email");
      $model = $this->user->where('email','=',$username)->first();

		  if (is_null($model)){
        Session::flash('message', '用户不存在');
			  return Redirect::to('/forget');
      }else{
        $name = $model->name ;
        $randstr = str_shuffle("ABCDEFGHIJKMNLOPQRST1234567890");
        $password = substr($randstr,0,8);
        $model->password = $password;
        $model->save();
        Mail::send('mails.password', array('name'=>$name,'password'=>$password), function($message){
          $message->to(Input::get("email"),Input::get("email"))->subject('Welcome');
        });

        Session::flash('message', '发送成功');
			  return Redirect::to('/forget');
      }
    }
    public function save(){
      $username = Input::get("username");
      $password = Input::get("password");
      $model = $this->user->where('email','=',$username)->first();
		  if (is_null($model)){
        Session::flash('message', '用户不存在');
			  return Redirect::to('/sessions/new');
      }
      if($password != $model->password){
        Session::flash('message', '密码不正确');
			  return Redirect::to('/sessions/new');
      }
      if(!$model->confirm_at){
        Session::flash('message', '邮箱未验证');
			  return Redirect::to('/sessions/new');
      }
      Session::put('current_user', $model);
			return Redirect::to('/plan');
    } 
    
    public function confirm(){
      $token = Input::get("token") ;
      $date = date('Y-m-s H:i:s', time());
      if($token){
        $model = $this->user->where('token','=',$token)->firstOrFail();
        $model->confirm_at = $date;
        $model->save();
        Session::put('current_user', $model);
			  return Redirect::to('/plan');
      }
    }


    public function delete(){
      Session::flush();
			return Redirect::to('/');
    } 
}

