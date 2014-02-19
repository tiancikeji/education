<?php

class RegistrationsController extends BaseController {
  
    protected $user;

    protected $layout = 'layouts.main';
    
    public function __construct(User $user)
    {
      $this->user = $user;
    }


    public function newpage(){
      return View::make('registrations.new');
    } 

    public function success(){
      return View::make('registrations.success');
    } 

    public function store(){
    	$input = Input::all();
      $validation = Validator::make($input, User::$rules);
 
      if ($validation->passes())
      {
        $token = Hash::make('secret');
        $this->user->name = Input::get("name");
        $this->user->email = Input::get("email");
        $this->user->password = Input::get("password");
        $this->user->token = $token;
        $this->user->save();
        Session::put('current_user_email',Input::get("email"));
        $path = app_path();
        Mail::send('mails.welcome', array('name'=>Input::get('name'),'token'=>$token), function($message){
          $message->to(Input::get('email'), Input::get('name'))->subject('Welcome to the Laravel 4 Auth App!');
        });

        return Redirect::to('/registrations/success');
      }

      return Redirect::to('/registrations/new')
        ->withInput()
        ->withErrors($validation)
        ->with('message', 'There were validation errors.');
    
      }

    public function sendemail(){
      $username = Input::get("email");
      $model = $this->user->where('email','=',$username)->first();

		  if (is_null($model)){

        Session::flash('message', '用户不存在');
			  return Redirect::to('/sessions/success');
      }else{

        // dd($model);
        $name = $model->name ;
        $token = $model->token;
        Mail::send('mails.welcome', array('name'=>$name,'token'=>$token), function($message){
          $message->to(Input::get("email"),Input::get("email"))->subject('Welcome to the Laravel 4 Auth App!');
        });

        Session::flash('message', '重新发送成功');
        return Redirect::to('/registrations/success');
      }
 
    }

   }

