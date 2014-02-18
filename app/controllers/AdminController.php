<?php
class AdminController extends BaseController {
 
  protected $layout = "layouts.admin";

	protected $teacher;

	public function __construct(Teacher $teacher)
	{
		$this->teacher = $teacher;
	}

	public function main()
	{

    $this->layout->content = View::make('admin.main');
	}
	public function signin()
	{
    return View::make('admin.signin');
	}

  public function login(){
      $username = Input::get("username");
      $password = Input::get("password");
      $this->teacher = $this->teacher->where('username','=',$username)->firstOrFail();
		  if (is_null($this->teacher)){
       Session::flash('message', 'user is not exist');
			 return Redirect::to('/admin/signin');
      }
      // var_dump($model->password);
      // var_dump($password);

      if($this->teacher->password != $password){
        Session::flash('message', 'password is not correct');
			 return Redirect::to('/admin/signin');
      }
      Session::put("current_admin", $this->teacher);
      Session::put("current_admin_id", $this->teacher->id);
    // var_dump(Session::get("current_admin"));
	    return Redirect::to('/admin/main');

  }

}
